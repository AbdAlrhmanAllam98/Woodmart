@extends('layout')
@section('body')
    @include('nav')
<section class="product text-center my-5">
    <h1>Cart</h1>
    <div class="container">
        <div class="row">
        @foreach ($products as $product)
           @include('product.product')
                        <div class="bottom mt-2">
                            <a href="{{url('cart/delete',$product->id)}}" class="btn btn-danger rounded-0 p-1">Remove</a>
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