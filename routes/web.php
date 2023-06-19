<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [QuoteController::class, 'index'])->name('home');
Route::get('quote/{quote:id}', [QuoteController::class, 'show']);
Route::get('quotes/inspirational-quotes', function() { return view('quotes.inspirational-quotes'); })->name('inspirational-quotes');
Route::get('quotes/vavok-quotes', function() { return view('quotes.vavok-quotes'); });
Route::get('quotes/vavok-quotes/get', function() { return file_get_contents('https://api.vavok.net/quotes/random'); })->name('vavok-quotes');