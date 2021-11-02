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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/cricket', [App\Http\Controllers\CricketController::class, 'index'])->name('index');
Route::get('/snooker', [App\Http\Controllers\SnookerController::class, 'index'])->name('index');
Route::get('/football', [App\Http\Controllers\FootballController::class, 'index'])->name('index');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('index');
