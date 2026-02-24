<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class MarketController extends Controller
{
    /**
     * WHY YAHOO FINANCE:
     * ─────────────────────────────────────────────────────────────
     * Twelve Data free plan = US, Forex, Crypto ONLY.
     * African stocks (JSE, NGX, NSE, EGX) need Grow plan = $79/mo.
     *
     * Yahoo Finance = completely FREE, no API key, no sign-up.
     * Supports JSE (.JO), NGX (.LG), NSE (.NR), EGX (.CA)
     * ─────────────────────────────────────────────────────────────
     *
     * Yahoo Finance ticker suffix by exchange:
     *   JSE (South Africa)  → .JO   e.g. NPN.JO
     *   NGX (Nigeria)       → .LG   e.g. DANGCEM.LG
     *   NSE (Kenya)         → .NR   e.g. SCOM.NR
     *   EGX (Egypt)         → .CA   e.g. COMI.CA
     *   GSE (Ghana)         → .GH   e.g. GCB.GH
     */
    const STOCKS = [
        [
            'key'      => 'NPN:JSE',
            'ticker'   => 'NPN.JO',
            'label'    => 'Naspers',
            'country'  => '🇿🇦 JSE',
            'currency' => 'ZAR',
        ],
        [
            'key'      => 'DANGCEM:NGX',
            'ticker'   => 'DANGCEM.LG',
            'label'    => 'Dangote Cement',
            'country'  => '🇳🇬 NGX',
            'currency' => 'NGN',
        ],
        [
            'key'      => 'SCOM:NSE',
            'ticker'   => 'SCOM.NR',
            'label'    => 'Safaricom',
            'country'  => '🇰🇪 NSE',
            'currency' => 'KES',
        ],
        [
            'key'      => 'COMI:EGX',
            'ticker'   => 'COMI.CA',
            'label'    => 'CIB Egypt',
            'country'  => '🇪🇬 EGX',
            'currency' => 'EGP',
        ],
    ];

    public function pulse()
    {
        $results = [];

        foreach (self::STOCKS as $stock) {

            $cacheKey = 'yf_' . str_replace(['.', ':'], '_', $stock['ticker']);

            $data = Cache::remember($cacheKey, 60, function () use ($stock) {

                // Yahoo Finance v8 chart endpoint — free, no key required
                $response = Http::withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (compatible; Laravel/10)',
                    'Accept'     => 'application/json',
                ])->timeout(10)->get(
                    "https://query1.finance.yahoo.com/v8/finance/chart/{$stock['ticker']}",
                    ['interval' => '1d', 'range' => '5d']
                );

                if ($response->failed()) {
                    Log::error('Yahoo Finance request failed', ['ticker' => $stock['ticker']]);
                    return ['error' => true, 'message' => 'Request failed'];
                }

                $json   = $response->json();
                $result = $json['chart']['result'][0] ?? null;

                if (!$result) {
                    return ['error' => true, 'message' => 'No data returned'];
                }

                $meta      = $result['meta'];
                $price     = (float) ($meta['regularMarketPrice']     ?? 0);
                $prevClose = (float) ($meta['chartPreviousClose']      ?? $meta['previousClose'] ?? 0);
                $open      = (float) ($meta['regularMarketOpen']      ?? 0);
                $high      = (float) ($meta['regularMarketDayHigh']   ?? 0);
                $low       = (float) ($meta['regularMarketDayLow']    ?? 0);
                $volume    = $meta['regularMarketVolume']              ?? null;

                $change    = $prevClose ? round($price - $prevClose, 2) : null;
                $changePct = $prevClose ? round((($price - $prevClose) / $prevClose) * 100, 2) : null;

                return [
                    'error'          => false,
                    'price'          => $price,
                    'open'           => $open,
                    'high'           => $high,
                    'low'            => $low,
                    'prev_close'     => $prevClose,
                    'change'         => $change,
                    'change_pct'     => $changePct,
                    'volume'         => $volume,
                    'currency'       => $meta['currency']           ?? $stock['currency'],
                    'is_market_open' => ($meta['marketState'] ?? '') === 'REGULAR',
                    'market_state'   => $meta['marketState']        ?? 'CLOSED',
                ];
            });

            $results[] = array_merge([
                'key'     => $stock['key'],
                'ticker'  => $stock['ticker'],
                'label'   => $stock['label'],
                'country' => $stock['country'],
                'currency'=> $stock['currency'],
            ], $data ?? ['error' => true, 'message' => 'Cache miss']);
        }

        return response()->json([
            'success' => true,
            'stocks'  => $results,
            'updated' => now()->toDateTimeString(),
        ]);
    }
}