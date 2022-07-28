@extends('layout')
@section('body')
@include('nav')
<main class="container product py-2">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 images">
            <img data-image="black" src="../images/product/product-furniture-19-black.jpg" alt="">
            <img  data-image="green" class="active" src="../images/product/product-furniture-19-green.jpg" alt="">
            <img data-image="blue" src="../images/product/product-furniture-19-blue.jpg" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
            <div class="product-description">
                <h1>{{$product->name}}</h1>
                <p class="price"><span>${{$product->price}}.00</span></p>
                <p>{{$product->description}}</p>
            </div>
            <div class="product-color d-flex my-3">
                <span class="me-3">Color</span>
                <div class="color-choose d-flex">
                <div>
                    <label for="green" class="bg-success rounded-circle">
                        <input data-image="green" type="radio" id="green" name="color" value="green">
                    </label>
                </div>
                <div>
                    <label for="blue" class="bg-primary rounded-circle">
                        <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                    </label>
                </div>
                <div>
                    <label for="black" class="bg-black rounded-circle">
                        <input data-image="black" type="radio" id="black" name="color" value="black">
                    </label>
                </div>
                </div>
            </div>
    
            <div class="d-flex align-items-center">
                <div class="quantity me-3 py-3">
                    <label for="quantity">Quantity : </label>
                    <input type="number" min="0" max="20" id="quantity" class="border">
                </div>
                <div class="cart">
                    <a href="{{url('add-cart',$product->id)}}"><button type="button" class="btn text-white green-button rounded-0">Add to Cart</button></a>
                </div>
            </div>
            <div class="operations d-flex align-items-center mt-3">
                <a href="#"><div class="compare"><i class="fa-solid fa-shuffle"></i> Compare</div></a>
                <a href="{{url('add-wishlist',$product->id)}}"><div class="wishlist"><i class="fa-regular fa-heart ms-2"></i> Add to wishlist</div></a>
            </div>
        </div>
    </div>
</main>
@endsection