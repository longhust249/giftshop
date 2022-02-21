@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="home"> 
    <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./assets/img/slide/slideshow_1.jpg" alt="First slide">
                    <div class="wrapper">
                        <a href="" class="btn">
                            <span>XEM NGAY</span>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">

                    <img class="d-block w-100" src="./assets/img/slide/slideshow_2.jpg" alt="Second slide">
                    <div class="wrapper">
                        <a href="" class="btn">
                            <span>XEM NGAY</span>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">

                    <img class="d-block w-100" src="./assets/img/slide/slideshow_3.jpg" alt="Third slide">
                    <div class="wrapper">
                        <a href="" class="btn">
                            <span>XEM NGAY</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="wrapper">
                    <a href="" class="btn">
                        <span>XEM NGAY</span>
                    </a>
                </div> -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="slide2">
        <div class="slide-main">
            <div class="slide-text">
                <p class="slide-text1">Chào mừng đến với The Joy Box</p>
                <p class="slide-text2">TẤT CẢ HỘP QUÀ JOY</p>
                <p class="slide-text3">Những hộp quà mang tên niềm vui tại The Joy Box hứa hẹn mang đến cho các bạn
                    trải nghiệm tặng và nhận quà thật đặc biệt & đáng nhớ!</p>
                <div class="btn2">
                    <div class="wrapper2">
                        <a href="" class="btn">
                            <span>XEM NGAY</span>
                        </a>
                    </div>
                </div>
            </div>
            <img src="./assets/img/slide1/img_intro_product_1.jpg" class="slide-img1" alt="First img" width="570px" height="540px">
        </div>
    </div>
    <div class="slide3">
        <div class="slide-main">
            <img src="./assets/img/slide1/img_intro_product_2.png" class="slide-img1" alt="First img" width="570px" height="540px">
            <div class="slide-text">
                <p class="slide-text1">Gifted with love - Unboxed with joy</p>
                <p class="slide-text2">HỘP QUÀ BÁN CHẠY NHẤT</p>
                <p class="slide-text3">Những hộp quà tặng "best-seller" từ The Joy Box hứa hẹn sẽ mang đến trải
                    nghiệm mở quà thật nhiều niềm vui</p>
                <div class="btn2">
                    <div class="wrapper2">
                        <a href="" class="btn">
                            <span>XEM NGAY</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="table-home-product" class="table-product">
        <div class="heading-home">
            <p class="title-first">Chào mừng đến với The Joy Box</p>
            <h2 class="title-second">SẢN PHẨM DƯỚI 500K</h2>
        </div>
        <div class="wrapper-collection-1">
            <div class="row product-list">
                @foreach ($products as $product)
                <div class="product-item">
                    <img class="pro-img" src="{{ $product->image }}" alt="">
                    <img class="pro-img-back" src="{{ $product->img_hover }}" alt="">
                    <div class="product-detail-home">
                        <h3 class="pro-name">
                       
                            <a style="text-decoration: none; color:#282828" href=" {{ route('product.detail', [$product->id])}}"> {{ $product->name }}</a>
                        </h3>
                        <p class="pro-price">{{ number_format($product->price) }}₫</p>
                    </div>
                </div>
                @endforeach
                
            </div>
            <!-- {{ $products->links('vendor.pagination.custom') }} -->
        </div>
    </div>    
</div>
@endsection


@section('script')
<script>
    const discribe = document.querySelector(".discribe")
    const turnback = document.querySelector(".turnback")
    const secury = document.querySelector(".secury")
    if (discribe) {
        discribe.addEventListener("click", function() {
            document.querySelector(".detail-disc-para-turnback").style.display = "none"
            document.querySelector(".detail-disc-para-discribe").style.display = "block"
            document.querySelector(".detail-disc-para-secury").style.display = "none"
        })
    }
    if (turnback) {
        turnback.addEventListener("click", function() {
            document.querySelector(".detail-disc-para-turnback").style.display = "block"
            document.querySelector(".detail-disc-para-discribe").style.display = "none"
            document.querySelector(".detail-disc-para-secury").style.display = "none"
        })
    }
    if (secury) {
        secury.addEventListener("click", function() {
            document.querySelector(".detail-disc-para-turnback").style.display = "none"
            document.querySelector(".detail-disc-para-discribe").style.display = "none"
            document.querySelector(".detail-disc-para-secury").style.display = "block"
        })
    }
    const productThumb = document.querySelectorAll(".product-thumb-detail")
    const productImg = document.querySelector(".product-img-detail")
    productThumb.forEach(function(imgItem, X) {
        imgItem.addEventListener("click", function() {
            productImg.src = imgItem.src
        })
    })
</script>

@endsection