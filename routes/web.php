<?php

use App\Http\Controllers\PrizeController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\WinnerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('wel');
})->name('hello');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/prize', [App\Http\Controllers\PrizeController::class, 'index'])->name('prize');

Route::get('/rounds', [RoundController::class, 'index'])->name('rounds');
Route::post('/rounds', [RoundController::class, 'store'])->name('add-round');
Route::get('/show', [RoundController::class, 'show'])->name('show');

Route::get('/prizes', [PrizeController::class, 'index'])->name('prizes');

Route::get('/winners', [WinnerController::class, 'index'])->name('winners');
Route::get('/winner', [WinnerController::class, 'show'])->name('winner');
