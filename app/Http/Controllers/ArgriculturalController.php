<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ArgriculturalController extends Controller
{
    public function fetchFieldTelemetry(Request $request)
{
    $apiKey = config('services.weatherapi.key');

    // Map African country codes to major agricultural cities
    $locations = [
        'ng' => 'Lagos',
        'gh' => 'Accra',
        'ke' => 'Nairobi',
        'za' => 'Johannesburg',
        'eg' => 'Cairo',
        'sn' => 'Dakar',
    ];

    $country = $request->query('country', 'ng');
    $city = $locations[$country] ?? 'Lagos';

    $response = Http::get('https://api.weatherapi.com/v1/current.json', [
        'key' => $apiKey,
        'q'   => $city,
        'aqi' => 'no'
    ]);

    if ($response->failed()) {
        return response()->json(['success' => false]);
    }

    $data = $response->json();

    return response()->json([
        'success'     => true,
        'country'     => $country,
        'city'        => $city,
        'temperature' => $data['current']['temp_c'],
        'humidity'    => $data['current']['humidity'],
        'precip'      => $data['current']['precip_mm'],
        'wind'        => $data['current']['wind_kph'],
        'condition'   => $data['current']['condition']['text'],
    ]);
}
}
