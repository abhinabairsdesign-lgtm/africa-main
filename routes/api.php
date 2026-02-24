<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\NewsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/market-pulse', [MarketController::class, 'pulse']);


Route::get('/news', [NewsController::class, 'index']);   // renders the view
Route::get('/news/fetch', [NewsController::class, 'fetch']);   // returns JSON
Route::get('/news/newfetch', [NewsController::class, 'newfetch']); 

Route::get('/news/africa-investment', [NewsController::class, 'fetchAfricanInvestmentNews']);
Route::get('/articles/fetch', [ArticlesController::class, 'fetch']);