<header class="headroom bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3 image">
                <a href="#"><img src="images/wood-logo-dark.svg" alt="wood-logo"></a>
            </div>
            <div class="col-md-6 col-lg-6 center-nav mt-3">
                <ul class="d-flex ms-5 m-0">
                    <li class="d-flex"><h6 class="active">HOME</h6><i class="fa-solid fa-chevron-down"></i></li>
                    <li class="d-flex"><h6>SHOP</h6><i class="fa-solid fa-chevron-down"></i></li>
                    <li class="d-flex"><h6>BLOG</h6><i class="fa-solid fa-chevron-down"></i></li>
                    <li class="d-flex"><h6>PAGES</h6><i class="fa-solid fa-chevron-down"></i></li>
                    <li class="d-flex"><h6>ELEMENTS</h6><i class="fa-solid fa-chevron-down"></i></li>
                    <li><h6>BUY</h6></li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 p-2 d-flex justify-content-center align-items-center options">
                @if(Auth::user())
                <h5>{{Auth::user()->name}}</h5>
                @else
                <a href="{{url('register')}}">
                    <div class="auth my-2">
                        <h6>LOGIN/REGISTER</h6>
                    </div>
                </a>
                @endif
                @if(Auth::user())
                <div class="operations d-flex">
                    <a href="{{url('/wishlist')}}"><div class="wishlist"><i class="fa-regular fa-heart ms-2"></i></div></a>
                    <a href="#"><div class="compare circle" data-count="0"><i class="fa-solid fa-shuffle ms-2"></i></div></a>
                    <a href="{{url('/cart')}}">
                        <div class="cart d-flex">
                            <div class="cart-icon circle" data-count="{{$cart->count()}}"><i class="fa-solid fa-bag-shopping ms-2"></i> </div>
                            <span class="checkout ms-2">${{$price}}.00</span>
                        </div>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</header>