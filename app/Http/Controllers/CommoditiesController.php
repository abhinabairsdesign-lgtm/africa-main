<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class CommoditiesController extends Controller
{
    /**
     * WHY YAHOO FINANCE:
     * ─────────────────────────────────────────────────────────────
     * Yahoo Finance = completely FREE, no API key, no sign-up.
     * Supports commodities via futures tickers:
     *
     *   Gold       → GC=F   (USD/oz)
     *   Silver     → SI=F   (USD/oz)
     *   Copper     → HG=F   (USD/lb)
     *   Platinum   → PL=F   (USD/oz)
     *   Crude Oil  → CL=F   (USD/bbl)
     *   Natural Gas→ NG=F   (USD/MMBtu)
     *   Soybeans   → ZS=F   (USd/bu — cents per bushel)
     *   Corn       → ZC=F   (USd/bu — cents per bushel)
     * ─────────────────────────────────────────────────────────────
     */
    const COMMODITIES = [
        [
            'key'      => 'GOLD',
            'ticker'   => 'GC=F',
            'label'    => 'Gold',
            'unit'     => 'oz',
            'icon'     => '🥇',
            'currency' => 'USD',
        ],
        [
            'key'      => 'SILVER',
            'ticker'   => 'SI=F',
            'label'    => 'Silver',
            'unit'     => 'oz',
            'icon'     => '🥈',
            'currency' => 'USD',
        ],
        [
            'key'      => 'COPPER',
            'ticker'   => 'HG=F',
            'label'    => 'Copper',
            'unit'     => 'lb',
            'icon'     => '🔶',
            'currency' => 'USD',
        ],
        [
            'key'      => 'PLATINUM',
            'ticker'   => 'PL=F',
            'label'    => 'Platinum',
            'unit'     => 'oz',
            'icon'     => '⬜',
            'currency' => 'USD',
        ],
        [
            'key'      => 'CRUDE_OIL',
            'ticker'   => 'CL=F',
            'label'    => 'Crude Oil',
            'unit'     => 'bbl',
            'icon'     => '🛢️',
            'currency' => 'USD',
        ],
        [
            'key'      => 'NATURAL_GAS',
            'ticker'   => 'NG=F',
            'label'    => 'Natural Gas',
            'unit'     => 'MMBtu',
            'icon'     => '🔥',
            'currency' => 'USD',
        ],
        [
            'key'      => 'SOYBEANS',
            'ticker'   => 'ZS=F',
            'label'    => 'Soybeans',
            'unit'     => 'bu',
            'icon'     => '🫘',
            'currency' => 'USd',   // cents per bushel
        ],
        [
            'key'      => 'CORN',
            'ticker'   => 'ZC=F',
            'label'    => 'Corn',
            'unit'     => 'bu',
            'icon'     => '🌽',
            'currency' => 'USd',   // cents per bushel
        ],
    ];

    /**
     * GET /commodities-pulse
     * Returns live commodity prices from Yahoo Finance (free, no key).
     */
    public function pulse()
    {
        $results = [];

        foreach (self::COMMODITIES as $commodity) {

            $cacheKey = 'yf_commodity_' . str_replace(['=', '.', ':'], '_', $commodity['ticker']);

            $data = Cache::remember($cacheKey, 1, function () use ($commodity) {

                // Yahoo Finance v8 chart endpoint — free, no key required
                $response = Http::withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (compatible; Laravel/10)',
                    'Accept'     => 'application/json',
                ])->timeout(10)->get(
                    "https://query1.finance.yahoo.com/v8/finance/chart/{$commodity['ticker']}",
                    ['interval' => '1d', 'range' => '5d']
                );

                if ($response->failed()) {
                    Log::error('Yahoo Finance commodities request failed', [
                        'ticker' => $commodity['ticker'],
                        'status' => $response->status(),
                    ]);
                    return ['error' => true, 'message' => 'Request failed'];
                }

                $json   = $response->json();
                $result = $json['chart']['result'][0] ?? null;

                if (!$result) {
                    Log::warning('Yahoo Finance: no result for ticker', ['ticker' => $commodity['ticker']]);
                    return ['error' => true, 'message' => 'No data returned'];
                }

                $meta      = $result['meta'];
                $price     = (float) ($meta['regularMarketPrice']   ?? 0);
                $prevClose = (float) ($meta['chartPreviousClose']   ?? $meta['previousClose'] ?? 0);
                $open      = (float) ($meta['regularMarketOpen']    ?? 0);
                $high      = (float) ($meta['regularMarketDayHigh'] ?? 0);
                $low       = (float) ($meta['regularMarketDayLow']  ?? 0);
                $volume    = $meta['regularMarketVolume']            ?? null;

                $change    = $prevClose ? round($price - $prevClose, 4) : null;
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
                    'currency'       => $meta['currency']          ?? $commodity['currency'],
                    'is_market_open' => ($meta['marketState'] ?? '') === 'REGULAR',
                    'market_state'   => $meta['marketState']       ?? 'CLOSED',
                ];
            });

            $results[] = array_merge([
                'key'      => $commodity['key'],
                'ticker'   => $commodity['ticker'],
                'label'    => $commodity['label'],
                'unit'     => $commodity['unit'],
                'icon'     => $commodity['icon'],
                'currency' => $commodity['currency'],
            ], $data ?? ['error' => true, 'message' => 'Cache miss']);
        }

        return response()->json([
            'success'     => true,
            'commodities' => $results,
            'updated'     => now()->toDateTimeString(),
        ]);
    }
}