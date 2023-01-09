<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

Route::get('/', [Controller::class, 'index']);

Route::get('/login', function () {
    return view('login');
})->middleware('guestSecurity');

Route::get('/register', function () {
    return view('register');
})->middleware('guestSecurity');

Route::get('/logout', [UserController::class, 'logout'])->middleware('security');
Route::get('/products', [ProductController::class, 'showProducts']);
Route::get('/search', [ProductController::class, 'search']);
Route::get('/products/{id}', [ProductController::class, 'productDetails']);
Route::get('/cart', [CartController::class, 'showCart'])->middleware('security');
Route::get('/addToCart/{id}', [CartController::class, 'addToCart'])->middleware('security');
Route::get('/deleteCart/{id}', [CartController::class, 'deleteCart'])->middleware('security');
Route::get('/updateCart/{id}', [CartController::class, 'updateQuantity'])->middleware('security');
Route::get('/checkout/{id}', [TransactionController::class, 'checkout'])->middleware('security');

Route::post('/login', [UserController::class, 'login'])->middleware('guestSecurity');
Route::post('/register', [UserController::class, 'register'])->middleware('guestSecurity');
