<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Models\Product;
use App\Models\Wishlist;
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

Route::get('/', [Controller::class,'index']);

Route::view('register','user.register');
Route::post('user/create',[UserController::class,'create']);
Route::view('login','user.login');
Route::post('user/login',[UserController::class,'login']);

Route::get('product/{id}',[ProductController::class,'showProduct']);

Route::middleware('auth_user')->group(function(){
    Route::get('/add-cart/{id}',[CartController::class,'addToCart']);
    Route::get('/cart',[CartController::class,'index']);
    Route::get('/cart/delete/{id}',[CartController::class,'deleteCart']);

    Route::get('/add-wishlist/{id}',[WishlistController::class,'addToWishlist']);
    Route::get('/wishlist',[WishlistController::class,'index']);
    Route::get('/wishlist/delete/{id}',[WishlistController::class,'deleteWishlist']);
});
