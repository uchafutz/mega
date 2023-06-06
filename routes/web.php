<?php

use App\Http\Controllers\Inv\OrderCustomerController;
use App\Http\Controllers\Inv\SubscriptCustomerController;
use App\Http\Controllers\MkekaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Subsription\Subscription;
use Illuminate\Support\Facades\Artisan;
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

// Clear application cache:
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});

Route::get('storage-link', function () {

    Artisan::call('storage:link');
    return "storage link succeful created";
});




Route::get("/login", function () {
    return view("auth.login");
});
Route::get("/register", function () {
    return view("auth.register");
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
    Route::post("/subscriptions/customer/{subscription}", SubscriptCustomerController::class)->name('subscriptions.customer');
    Route::post("/orders/customer/{order}", OrderCustomerController::class)->name("orders.customer");
});
