<div class="card col-12 col-sm-6 col-md-3 col-lg-3 border-0">
    <a href="{{url('product',$product->id)}}">
    <div class="card-img-top pt-2" data-status="SALE">                    
        <div>
            <img src="{{asset('images/product/'.$product->id.'-front.jpg')}}" class="front" alt="...">
            <img src="{{asset('images/product/'.$product->id.'-back.jpg')}}" class="back" alt="...">
        </div>
    </div>
    <div class="color-compare d-flex justify-content-between px-4">
        <div class="color-choose d-flex align-items-center">
            @php
                $colors=explode(',',$product->colors);
            @endphp
            <label style="background-color:{{$colors[0]}}" class="rounded-circle" data-image="1"></label>
            <label style="background-color:{{$colors[1]}}" class="rounded-circle" data-image="2"></label>
            <label style="background-color:{{$colors[2]}}" class="rounded-circle" data-image="3"></label>
        </div>
        <div class="compare"><i class="fa-solid fa-shuffle"></i></div>
    </div>

    <div class="card-body">
        <div class="card-info">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="type">{{$product->type}}</p>
            <p class="price">${{$product->price}}</p>
        </div>
        <div class="card-descr">
            <p id="product-content">{{$product->description}}</p>
            <div class="dots">
                <i class="fa-solid fa-ellipsis"></i>
            </div>