<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index(){
        $wishlist=Auth::user()->wishlists;
        $products=[];
        foreach ($wishlist as $wish) {
            array_push($products,Product::findOrFail($wish->product_id));
        }
        return view('wishlist.wishlist',compact('products'));
    }
    public function addToWishlist($id){
        $product=Product::findOrFail($id);
        Wishlist::create([
            'product_id'=>$product->id,
            'user_id'=>Auth::user()->id,
            'date'=>now(),
        ]);
        return back();
    }
    public function deleteWishlist($id){
        $product=Wishlist::where('product_id',$id)->first();
        $product->delete();
        return back();
    }
}
