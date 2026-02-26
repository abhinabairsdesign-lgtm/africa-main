<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class TechController extends Controller
{
    public function indexTechData()
    {
        return Cache::remember('africa_command_center', 300, function () {

            $start = microtime(true);

            $metalKey = config('services.metalprice.key');
            $eiaKey   = config('services.eia.key');

            /*
            |--------------------------------------------------------------------------
            | 1️⃣ GOLD + COPPER (MetalpriceAPI)
            |--------------------------------------------------------------------------
            */

            $metal = Http::timeout(10)->get(
                "https://api.metalpriceapi.com/v1/latest",
                [
                    'api_key'   => $metalKey,
                    'base'      => 'USD',
                    'currencies'=> 'XAU'
                ]
            )->json();

            $rates = $metal['rates'] ?? [];

            $gold = isset($rates['USDXAU'])
                ? round($rates['USDXAU'], 2)
                : 0;

            /*
            |--------------------------------------------------------------------------
            | 2️⃣ BRENT OIL (EIA API)
            |--------------------------------------------------------------------------
            */

            $oil = Http::timeout(10)->get(
                "https://api.eia.gov/v2/petroleum/pri/spt/data/",
                [
                    'api_key' => $eiaKey,
                    'frequency' => 'daily',
                    'data[0]' => 'value',
                    'facets[series][]' => 'RBRTE', // Brent
                    'sort[0][column]' => 'period',
                    'sort[0][direction]' => 'desc',
                    'length' => 1
                ]
            )->json();

            $oilPrice = $oil['response']['data'][0]['value'] ?? 0;

            /*
            |--------------------------------------------------------------------------
            | 3️⃣ USD/ZAR FX
            |--------------------------------------------------------------------------
            */

            $fx = Http::timeout(10)->get(
                "https://api.exchangerate.host/latest",
                [
                    'base' => 'USD',
                    'symbols' => 'ZAR'
                ]
            )->json();

            $usdZar = $fx['rates']['ZAR'] ?? 18.5;

            /*
            |--------------------------------------------------------------------------
            | 4️⃣ Compute Africa Metrics
            |--------------------------------------------------------------------------
            */

            // Drilling efficiency based on oil strength
            $efficiency = $oilPrice > 80 ? 95.4 : 87.2;

            // AI Commodity Forecast
            $forecastScore = ($gold > 2000 ? 1 : 0)
                           + ($oilPrice > 75 ? 1 : 0);

            $forecast = $forecastScore >= 2
                ? 'Bullish'
                : ($forecastScore == 1 ? 'Neutral' : 'Bearish');

            // Active Units (simulated from commodity strength)
            $activeUnits = $oilPrice > 80 ? 42 : 35;
            $totalUnits  = 45;

            // Safety Score based on volatility logic
            $safetyScore = $forecastScore >= 2 ? 88 : 72;

            $latency = round((microtime(true) - $start) * 1000);

            /*
            |--------------------------------------------------------------------------
            | 5️⃣ Return Structured Response
            |--------------------------------------------------------------------------
            */

            return response()->json([
                'success' => true,
                'data' => [
                    'gold_usd'     => $gold,
                    'gold_zar'     => round($gold * $usdZar, 2),
                    'oil_usd'      => $oilPrice,
                    'usd_zar'      => $usdZar,
                    'efficiency'   => $efficiency,
                    'forecast'     => $forecast,
                    'active_units' => $activeUnits,
                    'total_units'  => $totalUnits,
                    'safety_score' => $safetyScore,
                    'latency'      => $latency . 'ms',
                    'updated'      => now()->format('M d, Y | H:i') . ' GMT'
                ]
            ]);
        });
    }
}
