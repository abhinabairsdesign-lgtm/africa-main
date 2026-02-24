<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class GassController extends Controller
{
    public function fetchAfricaMarketPulse()
{
    $apiKey = config('services.eia.key');

    $cacheKey = 'africa_market_pulse';

    $data = Cache::remember($cacheKey, 900, function () use ($apiKey) {

        function fetchSeries($id, $apiKey) {
            $response = Http::get("https://api.eia.gov/v2/seriesid/{$id}", [
                'api_key' => $apiKey
            ])->json();

            return $response['response']['data'] ?? [];
        }

        $brent = fetchSeries('PET.RBRTE.D', $apiKey);
        $gas   = fetchSeries('NG.RNGWHHD.D', $apiKey);

        if (count($brent) < 2 || count($gas) < 2) return null;

        $brentToday = $brent[0]['value'];
        $brentPrev  = $brent[1]['value'];

        $gasToday = $gas[0]['value'];
        $gasPrev  = $gas[1]['value'];

        return [
            'brent_price' => $brentToday,
            'brent_change' => round((($brentToday - $brentPrev) / $brentPrev) * 100, 2),

            'gas_price' => $gasToday,
            'gas_change' => round((($gasToday - $gasPrev) / $gasPrev) * 100, 2),

            'africa_risk' => $brentToday > 80 ? 'Growth (A-)' : 'Stable (B+)',

            'updated_at' => now()->format('M d, Y | H:i') . ' GMT'
        ];
    });

    if (!$data) {
        return response()->json(['success' => false]);
    }

    return response()->json([
        'success' => true,
        'data' => $data
    ]);
}
}
