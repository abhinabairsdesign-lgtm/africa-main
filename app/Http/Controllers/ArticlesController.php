<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class ArticlesController extends Controller
{
     // Country code → Wikipedia URI
    const COUNTRY_URIS = [
        'ng' => 'http://en.wikipedia.org/wiki/Nigeria',
        'za' => 'http://en.wikipedia.org/wiki/South_Africa',
        'ke' => 'http://en.wikipedia.org/wiki/Kenya',
        'gh' => 'http://en.wikipedia.org/wiki/Ghana',
        'eg' => 'http://en.wikipedia.org/wiki/Egypt',
        'et' => 'http://en.wikipedia.org/wiki/Ethiopia',
        'tz' => 'http://en.wikipedia.org/wiki/Tanzania',
        'ug' => 'http://en.wikipedia.org/wiki/Uganda',
        'sn' => 'http://en.wikipedia.org/wiki/Senegal',
        'cm' => 'http://en.wikipedia.org/wiki/Cameroon',
        'ci' => 'http://en.wikipedia.org/wiki/Ivory_Coast',
        'rw' => 'http://en.wikipedia.org/wiki/Rwanda',
        'ma' => 'http://en.wikipedia.org/wiki/Morocco',
        'dz' => 'http://en.wikipedia.org/wiki/Algeria',
        'ao' => 'http://en.wikipedia.org/wiki/Angola',
        'cd' => 'http://en.wikipedia.org/wiki/Democratic_Republic_of_the_Congo',
        'us' => 'http://en.wikipedia.org/wiki/United_States',
        'gb' => 'http://en.wikipedia.org/wiki/United_Kingdom',
    ];

    // Category slug → NewsAPI.ai categoryUri
    const CATEGORY_URIS = [
        'business'     => 'news/Business',
        'finance'      => 'news/Business/Finance',
        'tech'         => 'news/Technology',
        'technology'   => 'news/Technology',
        'politics'     => 'news/Politics',
        'health'       => 'news/Health',
        'sports'       => 'news/Sports',
        'science'      => 'news/Science',
        'entertainment'=> 'news/Arts_and_Entertainment',
        'environment'  => 'news/Environment',
        'top'          => 'news/Business',  // default fallback
    ];

    public function fetch(Request $request)
    {
        $apiKey   = config('services.newsapi_ai.key');
        $category = $request->query('category', 'business');
        $country  = $request->query('country', 'ng');
        $language = $request->query('language', 'eng');

        $cacheKey = "newsapi_ai_{$category}_{$country}_{$language}";

        $articles = Cache::remember($cacheKey, 300, function () use ($apiKey, $category, $country, $language) {

            // ✅ FIX 1: Use Wikipedia URI for country location
            // $locationUri = self::COUNTRY_URIS[$country]
            //     ?? 'http://en.wikipedia.org/wiki/Nigeria';

                    $africanCountries = [
            'ng','za','ke','gh','eg','et','tz','ug','sn','cm','ci','rw',
            'ma','dz','ao','cd'
        ];

        $locationUris = collect($africanCountries)
    ->map(fn($code) => self::COUNTRY_URIS[$code] ?? null)
    ->filter()
    ->values()
    ->all();

            // ✅ FIX 2: Use correct news/ category format
            $categoryUri = self::CATEGORY_URIS[$category]
                ?? 'news/Business';

            // ✅ FIX 3: Flat params — no nested $and object
            $payload = [
                'action'         => 'getArticles',
                'apiKey'         => $apiKey,
                'categoryUri'    => $categoryUri,
                'sourceLocationUri' => $locationUris,
                'lang'           => $language,          // e.g. "eng"
                'articlesSortBy' => 'date',
                'articlesCount'  => 20,
                'resultType'     => 'articles',
                'articlesArticleBodyLen' => 200,
                'includeArticleImage'    => true,
                'includeArticleCategories' => true,
                'includeSourceTitle'     => true,
                'includeSourceLocation'  => true,
            ];

            // Must send as JSON body with Content-Type header
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->timeout(15)->post(
                'https://eventregistry.org/api/v1/article/getArticles',
                $payload
            );

            if ($response->failed()) {
                Log::error('NewsAPI.ai request failed', [
                    'status' => $response->status(),
                    'body'   => $response->body(),
                ]);
                return [];
            }

            $data = $response->json();

            if (isset($data['error'])) {
                Log::error('NewsAPI.ai API error', ['error' => $data['error']]);
                return [];
            }

            $results = $data['articles']['results'] ?? [];

            if (empty($results)) {
                Log::info('NewsAPI.ai returned 0 results', [
                    'category' => $categoryUri,
                    'location' => $locationUris,
                    'lang'     => $language,
                ]);
            }

            // ✅ FIX 4: Correctly map category labels as flat string array
            return collect($results)->map(fn ($item) => [
                'title'       => $item['title']            ?? 'No title',
                'description' => $item['body']             ?? '',
                'url'         => $item['url']              ?? '#',
                'source'      => $item['source']['title']  ?? 'Unknown',
                'image'       => $item['image']            ?? null,
                'published'   => $item['dateTime']         ?? null,

                // ✅ Map nested category objects → flat array of label strings
                // e.g. [["label" => "Business"], ["label" => "Finance"]] → ["Business", "Finance"]
                'category'    => collect($item['categories'] ?? [])
                    ->pluck('label')
                    ->filter()
                    ->values()
                    ->all(),

                'country'     => [
                    $item['source']['location']['country']['label'] ?? ''
                ],
            ])->values()->all();
        });

        return response()->json([
            'success'  => true,
            'articles' => $articles,
            'count'    => count($articles),
        ]);
    }
}
