<?php

use App\Http\Controllers\ProductController;
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
    return view('home');
});

// Product routes
Route::get('/product', [ProductController::class, 'index']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/show/{product}', [ProductController::class, 'show']);
