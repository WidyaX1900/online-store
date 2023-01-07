<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::middleware('auth')->group(function(){
    // Product routes
    Route::get('/product', [ProductController::class, 'index']);
    Route::post('/product/store', [ProductController::class, 'store']);
    Route::get('/product/show/{product}', [ProductController::class, 'show']);
    Route::post('/product/edit', [ProductController::class, 'edit']);
    Route::post('/product/update/{product}', [ProductController::class, 'update']);
    Route::get('/product/delete/{product}', [ProductController::class, 'delete']);
    Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy']);
    Route::get('/product/search', [ProductController::class, 'search']);

    // Logout
    Route::get('/logout', [LoginController::class, 'logout']);

    // Cart
    Route::post('/cart/store', [CartController::class, 'store']);
    Route::get('/cart', [CartController::class, 'index']);

});

// Auth routes
Route::middleware('guest')->group(function(){
    Route::get('/login', function(){
        return view('auth.login');
    })->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register/buyer', function(){
        return view('auth.register-buyer');
    });
    Route::post('/register/buyer', [RegisterController::class, 'buyer']);
});