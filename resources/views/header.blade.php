<header class="d-flex align-items-center header">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-3 image">
                <a href="#"><img src="images/wood-logo-dark.svg" alt="wood-logo"></a>
            </div>
            <div class="col-lg-6 form">
                <form action="" method="get" class="d-flex justify-content-between align-items-center">
                    <input class="border-0 w-100 p-2" type="search" placeholder="Search for products" aria-label="Search">
                    <div class="divider divider-search"></div>
                    <div class="dropdown px-2">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">SELECT CATEGORY</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item " href="#">Clocks</a></li>
                          <li><a class="dropdown-item" href="#">Lighting</a></li>
                          <li><a class="dropdown-item" href="#">Furniture</a></li>
                        </ul>
                    </div>
                    <div class="divider divider-search"></div>
                    <a href="">
                        <div class="p-2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </a>
                </form>
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