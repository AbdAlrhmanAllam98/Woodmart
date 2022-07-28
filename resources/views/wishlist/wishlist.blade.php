@extends('layout')
@section('body')
    @include('nav')
<section class="product text-center my-5">
    <h1>Wishlist</h1>
    <div class="container">
        <div class="row">
        @foreach ($products as $product)
            @include('product.product')
                        <div class="bottom d-flex justify-content-between align-items-center mt-2">
                            <a href="{{url('add-wishlist',$product->id)}}"><i class="fa-regular fa-heart ms-2"></i></a>
                            <a href="{{url('add-cart',$product->id)}}" class="btn green-button text-white rounded-0">Add to Cart</a>
                            <a href="{{url('wishlist/delete',$product->id)}}" class="btn btn-danger rounded-0 p-1">Remove</a>
                            <a href="#"> <i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        </div>
    </div>
</section>
@endsection