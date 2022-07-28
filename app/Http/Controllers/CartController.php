<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $carts=Auth::user()->carts;
        $products=[];
        foreach ($carts as $cart) {
            array_push($products,Product::findOrFail($cart->product_id));
        }
        return view('cart.cart',compact('products'));
    }
    public function addToCart($id){
        $product=Product::findOrFail($id);
        $user_id=Auth::user()->id;
        Cart::create([
            'product_id'=>$product->id,
            'user_id'=>$user_id,
            'price'=>$product->price,
            'quantity'=>1,
            'date'=>now(),
            'color'=>'black'
        ]);
        return back();
    }
    public function deleteCart($id){
        $product=Cart::where('product_id',$id)->first();
        $product->delete();
        return back();
    }
}
