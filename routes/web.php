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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/cricket', [App\Http\Controllers\HomeController::class, 'cricket'])->name('cricket');
Route::get('/snooker', [App\Http\Controllers\HomeController::class, 'snooker'])->name('snooker');
Route::get('/football', [App\Http\Controllers\HomeController::class, 'football'])->name('football');
