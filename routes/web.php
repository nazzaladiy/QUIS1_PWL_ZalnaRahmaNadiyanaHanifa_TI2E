<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\ContactController;
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
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
Route::get('/features', [App\Http\Controllers\FeaturesController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);