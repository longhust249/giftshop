@extends('layouts.app')
@section('title', 'Blog')
@section('content')
   
    <div class="blog-content">
        <div class="row">
            <div class="main-blog-new">
                <p class="title-news">Tin tức</p>
                <div class="main-blog">

                    <div class="blog-link">
                        <img src="./assets/img/Blog/Ý nghĩa của hộp đựng quà tặng và giá.jpg" alt="">
                        <div class="blog-para">
                            <p>Ngày 24 Tháng 06 Năm 2021</p>
                            <p><a class="blog-link1" href="">Ý nghĩa của hộp đựng quà tặng và giá tham khảo của một số
                                    hộp quà tặng phổ biến</a></p>
                            <p>Ngày nay, việc tặng quà trở nên ngày càng được trân trọng hơn bao giờ hết. Cùng với đó là
                                băn khoăn của người tặng...</p>
                            <a class="blog-link2" href="">Đọc thêm <i class="ti-angle-right"></i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-blog">
                <header class="header-sidebox">BÀI VIẾT MỚI NHẤT</header>
                <div class="sidebox1">
                    <div class="row">
                        <img class="sidebox1-img"
                            src="./assets/img/Blog/screenshot_2_6d8ef888fe2c4a79bea8c586d1e608d1_compact.jpg" alt=""
                            height="50px">
                        <div class="sidebox1-content">
                            <p class="sidebox-content-title">
                                <a href="">Ý nghĩa của hộp đựng quà tặng và giá tham... </a>
                            </p>
                            <p>Chị Huyền - 24.06.2021</p>
                        </div>
                    </div>
                </div>
                <header class="header-sidebox">DANH MỤC</header>
                <p class="news">
                    <a  href="#">Tin Tức</a>
                </p>
            </div>
        </div>
    </div>
    @endsection 
    