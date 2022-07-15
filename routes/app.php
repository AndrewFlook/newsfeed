<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\OrdersController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Account\PaymentsController;
use App\Http\Controllers\Account\SecurityController;
use App\Http\Controllers\Account\PreferencesController;

/*
|--------------------------------------------------------------------------
| App Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::name('account.')->group(function () {
        Route::controller(AccountController::class)->group(function () {
            Route::get('/account', 'index')->name('index');
            Route::prefix('account')->group(function () {
                Route::resource('profile', ProfileController::class)->only(['index']);
                Route::resource('security', SecurityController::class)->only(['index', 'update']);
                Route::resource('preferences', PreferencesController::class)->only(['index']);
                Route::resource('orders', OrdersController::class)->only(['index']);
                Route::resource('payments', PaymentsController::class)->only(['index']);
            });
        });
    });
});