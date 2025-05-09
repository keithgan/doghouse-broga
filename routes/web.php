<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/book-now', [BookingController::class, 'showForm'])->name('book-now');
Route::post('/book-now', [BookingController::class, 'submitForm'])->name('book-now.submit');
Route::view('/terms-conditions', 'terms-conditions')->name('terms-conditions');
Route::view('/thank-you', 'thank-you')->name('thank-you');
