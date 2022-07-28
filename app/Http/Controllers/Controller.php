<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        $products=Product::get();
        $wishlist=null;
        $cart=null;
        if(Auth::user()){
            $wishlist=Auth::user()->wishlists; 
            $cart=Auth::user()->carts; 
        }
        $price=$this->checkOut();
        return view('welcome',compact('products','price','wishlist','cart'));
    }
    public function checkOut(){
        $price=0.00;
        if(Auth::user()){
            $carts=Auth::user()->carts;
            foreach ($carts as $cart) {
                $price+=$cart->price;
            }
        }
        return $price;
    }
}
