
$(document).ready(function(){
    var myElement = document.querySelector(".headroom");
    var headroom  = new Headroom(myElement);
    headroom.init();

    let up=document.getElementsByClassName("up")[0];
    window.onscroll=function(){
        if(this.scrollY>=1000){
            up.classList.add("show")
        }
        else{
            up.classList.remove("show");
        }
        if(this.scrollY<=500){
            myElement.classList.remove('headroom--pinned');
            myElement.classList.add('headroom--unpinned');
        }
    }
    up.addEventListener('click',function(){
        window.scrollTo({top:0,behavior:"smooth"})
    });
        
    $(".owl-carousel-latest").owlCarousel({
        nav : true,
        loop:true,
        navText : ["<i class='fa fa-chevron-left fa-2xl'></i>","<i class='fa fa-chevron-right fa-2xl'></i>"],
        responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }}
    });

    $(".owl-carousel-brands").owlCarousel({
        nav : true,
        loop:true,
        navText : ["<i class='fa fa-chevron-left fa-2xl'></i>","<i class='fa fa-chevron-right fa-2xl'></i>"],
        responsive:{
        0:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }}
    });

    $(".owl-carousel").owlCarousel({
        items : 4,
        loop:true,
        nav : true,
        navText : ["<i class='fa fa-chevron-left fa-2xl mr-5'></i>","<i class='fa fa-chevron-right fa-2xl ml-5'></i>"]
    });

    $('.main-image-info .color-choose label').on('click',function(){
        var imageNumber=$(this).attr('data-image');
        $('.main-category .main-image').css('background-image',`url('../images/slider/slider-chair-${imageNumber}.jpg')`);
    });
    $('.color-choose input').on('click', function() {
        var productColor = $(this).attr('data-image');
        $('.active').removeClass('active');
        $('.product .images img[data-image = ' + productColor + ']').addClass('active');
        $(this).addClass('active');
    });

    $('.product .dots i').on('click',function(){
        $(this).parent().css('display','none');
        $('#product-content').css('display','block');
    });
});
