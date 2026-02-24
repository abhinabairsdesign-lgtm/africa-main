<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stichoza\GoogleTranslate\GoogleTranslate;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Only translate HTML responses
        if (
            Session::has('locale') &&
            Session::get('locale') !== 'en' &&
            str_contains($response->headers->get('Content-Type'), 'text/html')
        ) {
            $locale = Session::get('locale');
            $translator = new GoogleTranslate();
            $translator->setSource('en');
            $translator->setTarget($locale);

            $content = $response->getContent();

            libxml_use_internal_errors(true);

            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $xpath = new \DOMXPath($dom);

            // Translate only visible text nodes
            $nodes = $xpath->query('//text()[not(ancestor::script) and not(ancestor::style)]');

            foreach ($nodes as $node) {

                $text = trim($node->nodeValue);

                if ($text !== '' && strlen($text) > 2) {
                    try {
                        $node->nodeValue = $translator->translate($text);
                    } catch (\Exception $e) {
                        // Skip if translation fails
                    }
                }
            }

            $response->setContent($dom->saveHTML());
        }

        return $response;
    }
}