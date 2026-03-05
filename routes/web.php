<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\IntelligenceAccessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\EmailVerificationController;

Route::get('/', function () {
    return view('Home.home');
})->name('home');

Route::get('/about', function () {
    return view('About.about');
})->name('about');

Route::get('/agriculture', function () {
    return view('Agriculture.agriculture');
})->name('agriculture');


Route::get('/petriliam_gass', function () {
    return view('Petrolium-Gas.petriliam_gass');
})->name('petriliam-gass');


Route::get('/mining', function () {
    return view('Mining.mining');
})->name('mining');


Route::get('/investment', function () {
    return view('Investment.investment');
})->name('investment');


Route::get('/technology', function () {
    return view('Technology.technology');
})->name('technology');



Route::get('/contact', function () {
    return view('Contact.contact');
})->name('contact');



Route::get('/donatenow', function () {
    return view('DonateNow.donatenow');
})->name('donatenow');

// Route::get('/lang/{lang}', [LanguageController::class, 'switch'])->name(name: 'lang.switch');


Route::get('/market-pulse', [MarketController::class, 'pulse']);


Route::get('/news', [NewsController::class, 'index']);   // renders the view
// Route::get('/news/fetch', [NewsController::class, 'fetch']);   // returns JSON
// Route::get('/news/newfetch', [NewsController::class, 'newfetch']); 

// Route::get('/news/africa-investment', [NewsController::class, 'fetchAfricanInvestmentNews']);
// Route::get('/articles/fetch', [ArticlesController::class, 'fetch']);

Route::post('/intelligence-access', [IntelligenceAccessController::class, 'store']);

Route::get('/payment-success', [PaymentController::class, 'success']);
Route::get('/payment-cancel', [PaymentController::class, 'cancel']);


Route::post('/send-otp', [EmailVerificationController::class, 'sendOtp']);
Route::post('/verify-otp', [EmailVerificationController::class, 'verifyOtp']);