<?php

use App\Http\Controllers\MkekaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Subsription\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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




Route::get("/today", function () {
    return view("today");
});

Route::get('/', [\App\Http\Controllers\Web\WebController::class, 'index'])->name("welcome");

Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/free-bets', [\App\Http\Controllers\Web\WebController::class, 'free'])->name("free-bets");
Route::get('/today', [\App\Http\Controllers\Web\WebController::class, 'today'])->name("today");
Route::get('/results', [\App\Http\Controllers\Web\WebController::class, 'results'])->name("results");
Route::get('/todayshow', [\App\Http\Controllers\Web\WebController::class, 'todayshow'])->name('todayshow');
Route::get('/myorders', [\App\Http\Controllers\Web\WebController::class, 'myorders'])->name("myorders");
Route::group(['middleware' => ['auth']], function () {
    Route::resource("packages", PackageController::class);
    Route::resource("subscriptions", SubscriptionController::class);
    Route::resource("mkekas", MkekaController::class);
    Route::resource("orders", OrderController::class);
});
