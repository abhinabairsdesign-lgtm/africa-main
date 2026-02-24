<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{

    /**
     * Show the live news board view.
     */
    public function index()
    {
        return view('Home.home');
    }

    /**
     * Fetch latest news from NewsData.io (called via AJAX).
     * GET /news/fetch?category=top&country=ng&language=en
     */
    public function fetch()
    {
        $apiKey = config('services.newsdata.key');

        $response = Http::timeout(10)->get('https://newsdata.io/api/1/news', [
            'apikey'   => $apiKey,
            'language' => 'en',
            'country'  => 'ng,gh',
        ]);

        if ($response->failed()) {
            return response()->json([
                'success' => false,
                'articles' => []
            ]);
        }

        $results = $response->json('results') ?? [];

        $articles = collect($results)->map(function ($item) {
            return [
                'title'       => $item['title'] ?? '',
                'description' => $item['description'] ?? '',
                'url'         => $item['link'] ?? '#',
                'image'       => $item['image_url'] ?? null,
                'source'      => $item['source_id'] ?? 'Unknown',
                'published'   => $item['pubDate'] ?? null,
                'category'    => $item['category'] ?? [],
            ];
        })->values()->all();

        return response()->json([
            'success'  => true,
            'articles' => $articles,
            'count'    => count($articles),
        ]);
    }
    // public function fetchAfricanInvestmentNews()
    // {
    //     $apiKey = config('services.marketaux.key');

    //     $cacheKey = 'marketaux_africa_news';

    //     $articles = Cache::remember($cacheKey, 120, function () use ($apiKey) {

    //         $response = Http::timeout(10)->get(
    //             'https://api.marketaux.com/v1/news/all',
    //             [
    //                 'api_token' => $apiKey,
    //                 'countries' => 'ng,gh,ke,za,eg,ci',
    //                 'language'  => 'en',
    //                 'filter_entities' => 'true',
    //                 'limit' => 6,
    //             ]
    //         );

    //         if ($response->failed()) {
    //             return [];
    //         }

    //         return collect($response->json('data') ?? [])
    //             ->map(fn($item) => [
    //                 'title'       => $item['title'] ?? '',
    //                 'description' => $item['description'] ?? '',
    //                 'url'         => $item['url'] ?? '#',
    //                 'image'       => $item['image_url'] ?? null,
    //                 'source'      => $item['source'] ?? 'MarketAux',
    //                 'published'   => $item['published_at'] ?? null,
    //                 'country'     => strtolower($item['countries'][0] ?? ''),
    //                 'category'    => $item['industries'][0] ?? 'Investment',
    //             ])
    //             ->values()
    //             ->all();
    //     });

    //     return response()->json([
    //         'success'  => true,
    //         'articles' => $articles,
    //     ]);
    // }

    /**
     * Fetch latest news from NewsAPI.ai
     * GET /news/fetch?category=business&country=ng&language=en
     */
    // public function fetch(Request $request)
    // {
    //     $apiKey   = config('services.newsapi_ai.key');
    //     $category = $request->query('category', 'business');
    //     $country  = $request->query('country', 'ng');
    //     $language = $request->query('language', 'eng');

    //     $cacheKey = "newsapi_ai_{$category}_{$country}_{$language}";

    //     $articles = Cache::remember($cacheKey, 300, function () use ($apiKey, $category, $country, $language) {

    //         $response = Http::timeout(15)
    //             ->post('https://eventregistry.org/api/v1/article/getArticles', [
    //                 'action' => 'getArticles',
    //                 'apiKey' => $apiKey,

    //                 'query' => [
    //                     '$and' => [
    //                         [
    //                             'categoryUri' =>
    //                                 "dmoz/Business/{$this->mapCategory($category)}"
    //                         ],
    //                         [
    //                             'sourceLocation' => [
    //                                 'country' => strtoupper($country)
    //                             ]
    //                         ]
    //                     ]
    //                 ],

    //                 'articlesSortBy' => 'date',
    //                 'articlesCount'  => 20,
    //                 'articlesArticleBodyLen' => 0,
    //                 'resultType' => 'articles',
    //                 'lang' => [$language],
    //             ]);

    //         if ($response->failed()) {
    //             return [];
    //         }

    //         $data = $response->json();

    //         return collect($data['articles']['results'] ?? [])
    //             ->map(fn ($item) => [
    //                 'title'       => $item['title'] ?? 'No title',
    //                 'description' => $item['body'] ?? '',
    //                 'url'         => $item['url'] ?? '#',
    //                 'source'      => $item['source']['title'] ?? 'Unknown',
    //                 'image'       => $item['image'] ?? null,
    //                 'published'   => $item['dateTime'] ?? null,
    //                 'category'    => $item['categories'] ?? [],
    //                 'country'     => [$item['source']['location']['country'] ?? ''],
    //             ])
    //             ->values()
    //             ->all();
    //     });

    //     return response()->json([
    //         'success'  => true,
    //         'articles' => $articles,
    //         'count'    => count($articles),
    //     ]);
    // }

    // /**
    //  * Map simple categories to NewsAPI.ai taxonomy
    //  */
    // private function mapCategory(string $category): string
    // {
    //     return match ($category) {
    //         'business' => 'Business',
    //         'finance'  => 'Investing',
    //         'tech'     => 'Computers',
    //         'energy'   => 'Energy',
    //         default    => 'Business',
    //     };
    // }

    public function fetchAfricanInvestmentNews(Request $request)
    {
        // $apiKey = config('services.newsdata.key'); // ← same key you already use

        // // Rotate through African countries so we get variety across 6 cards.
        // // newsdata free tier allows ONE country per request, so we make
        // // 3 parallel requests for different countries and merge the results.
        // $targets = [
        //     ['country' => 'ng', 'category' => 'business'],  // Nigeria
        //     ['country' => 'gh', 'category' => 'business'],  // Ghana
        //     ['country' => 'ke', 'category' => 'business'],  // Kenya
        // ];

        // $cacheKey = 'newsdata_africa_investment';

        // $articles = Cache::remember($cacheKey, 120, function () use ($apiKey, $targets) {

        //     $all = [];

        //     foreach ($targets as $target) {
        //         $response = Http::timeout(10)->get('https://newsdata.io/api/1/news', [
        //             'apikey'   => $apiKey,
        //             'country'  => $target['country'],
        //             'category' => $target['category'],
        //             'language' => 'en',
        //         ]);

        //         if ($response->failed()) continue;

        //         $results = $response->json('results') ?? [];

        //         // Take 2 articles per country → 6 total for the grid
        //         $slice = collect($results)
        //             ->take(2)
        //             ->map(fn($item) => [
        //                 'title'       => $item['title']       ?? '',
        //                 'description' => $item['description'] ?? '',
        //                 'url'         => $item['link']        ?? '#',
        //                 'image'       => $item['image_url']   ?? null,
        //                 'source'      => $item['source_id']   ?? 'Unknown',
        //                 'published'   => $item['pubDate']     ?? null,
        //                 'country'     => $target['country'],
        //                 // newsdata returns category as array e.g. ["business"]
        //                 'category'    => $item['category']    ?? ['business'],
        //             ])
        //             ->all();

        //         $all = array_merge($all, $slice);
        //     }

        //     return $all;
        // });

        // return response()->json([
        //     'success'  => true,
        //     'articles' => $articles,
        //     'count'    => count($articles),
        // ]);





        $apiKey = config('services.newsdata.key');

        // Allow category from frontend (default = business)
        $category = $request->query('category', 'business');

        $countries = [
            'ng', // Nigeria
            'gh', // Ghana
            'ke', // Kenya
            'za', // South Africa
            'eg', // Egypt
            'ma', // Morocco
            'et', // Ethiopia
            'tz', // Tanzania
            'sn', // Senegal
            'rw', // Rwanda
        ];

        // Shuffle countries for variety
        shuffle($countries);

        // Take first 3 countries per request (to avoid too many API calls)
        $selectedCountries = array_slice($countries, 0, 3);

        $cacheKey = "newsdata_africa_{$category}";

        $articles = Cache::remember($cacheKey, 120, function () use ($apiKey, $selectedCountries, $category) {

            $all = [];

            foreach ($selectedCountries as $country) {

                $response = Http::timeout(10)->get('https://newsdata.io/api/1/news', [
                    'apikey'   => $apiKey,
                    'country'  => $country,
                    'category' => null,
                    'language' => 'en',
                ]);

                if ($response->failed()) continue;

                $results = $response->json('results') ?? [];

                $slice = collect($results)
                    ->take(2) // 2 per country → 6 total
                    ->map(fn($item) => [
                        'title'       => $item['title']       ?? '',
                        'description' => $item['description'] ?? '',
                        'url'         => $item['link']        ?? '#',
                        'image'       => $item['image_url']   ?? null,
                        'source'      => $item['source_id']   ?? 'Unknown',
                        'published'   => $item['pubDate']     ?? null,
                        'country'     => $country,
                        'category'    => $item['category']    ?? [$category],
                    ])
                    ->all();

                $all = array_merge($all, $slice);
            }

            // Sort newest first
            usort($all, function ($a, $b) {
                return strtotime($b['published']) - strtotime($a['published']);
            });

            return $all;
        });

        return response()->json([
            'success'  => true,
            'articles' => $articles,
            'count'    => count($articles),
        ]);
    }

}
