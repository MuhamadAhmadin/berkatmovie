<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [\App\Http\Controllers\PageController::class, 'homepage'])->name('welcome');
Route::get('/movie/category/{slug}', [\App\Http\Controllers\PageController::class, 'movie_category'])->name('movie.per_category');
Route::get('/movie/{movie_id}', [\App\Http\Controllers\PageController::class, 'movie_detail'])->name('movie.detail');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function() {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('index');

    // Master Data
    Route::get('user/profile', [\App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::put('user/profile_update', [\App\Http\Controllers\UserController::class, 'profile_update'])->name('user.profile_update');
    Route::resource('user', \App\Http\Controllers\UserController::class)->except('show');
    Route::resource('kategori', \App\Http\Controllers\KategoriController::class)->except('show');

});

require __DIR__.'/auth.php';
