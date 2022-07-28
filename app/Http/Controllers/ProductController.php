<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function showProduct($id){
        $product=Product::findOrFail($id);
        return view('product.show_product',compact('product'));
    }
}
