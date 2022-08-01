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
Route::view('login','user.login');

Route::controller(UserController::class)->group(function(){
    Route::post('user/create','create');
    Route::post('user/login','login');
});
Route::controller(ProductController::class)->group(function(){
    Route::get('product/{id}','showProduct');
});

Route::middleware('auth_user')->group(function(){
    Route::controller(CartController::class)->group(function(){
        Route::get('/add-cart/{id}','addToCart');
        Route::get('/cart','index');
        Route::get('/cart/delete/{id}','deleteCart');
    });
    Route::controller(WishlistController::class)->group(function(){
        Route::get('/add-wishlist/{id}','addToWishlist');
        Route::get('/wishlist','index');
        Route::get('/wishlist/delete/{id}','deleteWishlist');
    });
});
