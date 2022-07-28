<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'description',
        'type',
        'price',
        'colors',
        'status',
        'images_path',
        'sale'
    ];
    public function carts(){
        return $this->hasMany(Cart::class);
    }
    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }
}
