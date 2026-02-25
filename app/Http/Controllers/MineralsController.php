<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MineralsController extends Controller
{
    public function fetchAfricaMinerals()
    {
        $apiKey = config('services.metalprice.key');

        $response = Http::get("https://api.metalpriceapi.com/v1/latest", [
            'api_key' => $apiKey,
            'base' => 'ZAR',          // ✅ Change base currency to Rand
            'currencies' => 'XAU,XAG'
        ])->json();

        $rates = $response['rates'] ?? [];

        /*
         When base = ZAR
         API returns:
         ZARXAU  → ZAR per ounce of gold
         ZARXAG  → ZAR per ounce of silver
        */

        $gold   = isset($rates['ZARXAU']) ? round($rates['ZARXAU'], 2) : null;
        $silver = isset($rates['ZARXAG']) ? round($rates['ZARXAG'], 2) : null;

        $riskIndex = $gold && $gold > 35000 ? 78 : 65;
        $riskLabel = $gold && $gold > 35000 ? 'Stable' : 'Caution';

        return response()->json([
            'success' => true,
            'data' => [
                'gold' => $gold,
                'silver' => $silver,
                'currency' => 'ZAR',
                'risk_index' => $riskIndex,
                'risk_label' => $riskLabel,
                'updated' => now()->format('M d, Y | H:i') . ' GMT'
            ]
        ]);
    }
}