<section class="product text-center">
    <div class="container">
        <div class="title-subtitle">WOODEN ACCESSORIES</div>
        <div class="liner-container">
            <h4>FEATURED PRODUCTS</h4>
        </div>
        <div class="title-after-title">Visit our shop to see amazing creations from our designers.</div>
        <div class="row">
        @foreach ($products as $product)
                @include('product.product')
                        <div class="bottom d-flex justify-content-between align-items-center mt-2">
                            <a href="{{url('add-wishlist',$product->id)}}"><i class="fa-regular fa-heart ms-2"></i></a>
                            <a href="{{url('add-cart',$product->id)}}" class="btn green-button text-white rounded-0">Add to Cart</a>
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