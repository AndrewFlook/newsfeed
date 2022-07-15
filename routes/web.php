<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Newsfeed\IGNController;
use App\Http\Controllers\Newsfeed\MaxrollController;
use App\Http\Controllers\Newsfeed\WowheadController;

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
Route::redirect('/', 'wowhead', 302);
Route::get('/wowhead', [WowheadController::class, 'index'])->name('wowhead');
Route::get('/maxroll', [MaxrollController::class, 'index'])->name('maxroll');
Route::get('/ign', [IGNController::class, 'index'])->name('ign');

require __DIR__.'/app.php';
require __DIR__.'/auth.php';

Route::redirect('.env', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-login.php', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');
Route::redirect('wp-admin', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');