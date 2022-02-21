<header class="header">
    <nav class="header__navbar">
        <ul class="header__navbar-contact">
            <li class="header__navbar-info">
                <i class="header__navbar-icon fas fa-map-marker-alt"></i>
                Q.Hai Ba Trung, Ha Noi
            </li>
            <li class="header__navbar-info">
                <i class="header__navbar-icon fas fa-phone-alt"></i>
                0969688688
            </li>
        </ul>
        <ul class="header__navbar-contact">
            <li class="header__navbar-info">
                <a href="" class="header__navbar-info-link header__navbar-info-link--separate">Instagram</a>
            </li>
            <li class="header__navbar-info">
                <a href="" class="header__navbar-info-link">Facebook</a>
            </li>
        </ul>
    </nav>
    <div class="grid">
        <div class="header-with-bar">
            <div class="header__logo">
                <img class="logo" src="//theme.hstatic.net/200000350831/1000719282/14/logo.png?v=119" alt="The Joy Box">
            </div>
            <div class="header__bar">
                <ul class="mainbar">
                    <li><a href="{{route('home')}}">TRANG CHỦ</a></li>
                    <li class="drop">
                        <a href="{{route('product')}}">SẢN PHẨM</a>
                        <ul class="minibar">
                            <li><a href="{{route('category',[1])}}">Sản phẩm nổi bật</a></li>
                            <li><a href="{{route('category',[2])}}">Hộp quà tặng nữ</a></li>
                            <li><a href="{{route('category',[3])}}">Hộp quà tặng nam</a></li>
                            <li><a href="{{route('category',[4])}}">Hộp quà tặng dưới 500k</a></li>
                            <li><a href="{{route('category',[5])}}">Hộp quà tặng Eco - friendly</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('intro')}}">GIỚI THIỆU</a></li>
                    <li><a href="{{route('blog')}}">BLOG</a></li>
                    <li><a href="{{route('contact')}}">LIÊN HỆ</a></li>
                </ul>

            </div>

            <ul class="header__icon">
                <li class="search icon">
                    <i class="ti-search "></i>
                    <div class="search-list">
                        <header class="search-list-header">tìm kiếm</header>
                        <div class="search-list-bar">
                            <input type="text" name="" placeholder="Tìm kiếm sản phẩm..." id="" class="search-text">
                            <button class="search-btn">
                                <i class="ti-search search-btn-icon"></i>
                            </button>
                        </div>
                    </div>

                </li>
                <li class="user icon">
                    <i class="ti-user "></i>
                    <div class="user-list">
                        <header class="user-list-header">đăng nhập tài khoản</header>
                        <p class="user-list-para1">Nhập email và mật khẩu của bạn</p>
                        <div class="user-list-bar">
                            <input type="text" name="" placeholder="Email" id="" class="email-text">
                        </div>
                        <div class="user-list-bar">
                            <input type="text" name="" placeholder="Mật khẩu" id="" class="password-text">
                        </div>
                        <p class="user-list-para2">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</p>
                        <button class="login-btn" type="submit">
                            <p class="login-btn-text">ĐĂNG NHẬP</p>
                        </button>
                        <p class="user-list-para3">Khách hàng mới? <a href="{{route('register')}}">Tạo tài khoản</a></p>
                        <p class="user-list-para4">Quên mật khẩu? <a href="">Khôi phục mật khẩu</a></p>
                    </div>
                </li>
                <li class="bag icon">
                    <i class="ti-bag "><span>{{ \Cart::content()->count()}}</span></i>
                    @if(\Cart::content()->count() < 1) <div class="bag-list">
                        <header class="bag-list-header">GIỎ HÀNG</header>
                        <div class="empty-bag">
                            <i class="ti-shopping-cart"></i>
                            <p class="empty-bag-text">Hiện chưa có sản phẩm</p>
                        </div>
                        <div class="total-price">
                            <p class="total-price-text">TỔNG TIỀN:                               
                            </p>
                            <p class="total-price-numb">
                                @if( \Cart::content()->count() > 0)
                                @php
                                $total = str_replace(',', '', \Cart::total());
                                $total = intval($total);

                                @endphp
                                <span>{{ number_format($total)}}₫</span>
                                @else
                                <span>0₫</span>
                                @endif</p>

                            <button class="bag-check-btn" type="submit">
                                <p class="bag-check-text">
                                    <a style="text-decoration: none; color:#fff" href="{{route('cart')}}"> XEM GIỎ HÀNG</a>
                                </p>
                            </button>
                            <button class="pay-btn" type="submit">
                                <p class="pay-text">THANH TOÁN</p>
                            </button>
                        </div>


        </div>
        @else
        <div id="bag-list" class="bag-list">
            <header class="bag-list-header">GIỎ HÀNG</header>
            <div class="shopping-bag">
                <div class="list-item">
                    @php $content = !empty(\Cart::content()) ? \Cart::content() : '' @endphp
                    @if(!empty($content))
                    @foreach($content as $data)
                    <div class="mini-cart" data-value="{{$data->rowId}}">
                        <div class="mini-cart-img">
                            <a href="#">
                                <img class="mini-img" src="{{ $data->options['image'] }}" alt="">
                            </a>
                        </div>
                        <div class="mini-cart-info">
                            <a href="" class="mini-info-title">{{ $data->name}}</a>
                            <span class="mini-info-quantity">{{ $data->qty }}</span>
                            <span class="mini-info-price">{{ $data->price }}d</span>
                            <span class="mini-info-remove">
                                <i class="ti-close"></i>
                            </span>
                        </div>
                    </div>

                    @endforeach
                    @endif

                </div>


                <div class="total-price">
                    <p class="total-price-text">TỔNG TIỀN:</p>
                    <p class="total-price-numb">
                        @if( \Cart::content()->count() > 0)
                            @php 
                            $total = str_replace(',', '', \Cart::total());
                            $total = intval($total);
                        
                            @endphp
                            <span>{{ number_format($total)}}₫</span>
                            @else
                            <span>0₫</span>
                            @endif</p>

                    <button class="bag-check-btn" type="submit">
                        <p class="bag-check-text">
                            <a style="text-decoration: none; color:#fff" href="{{route('cart')}}"> XEM GIỎ HÀNG</a>
                        </p>
                    </button>
                    <button class="pay-btn" type="submit">
                        <p class="pay-text">THANH TOÁN</p>
                    </button>
                </div>

            </div>

        </div>
        @endif



        </li>
        </ul>
    </div>
    </div>
</header>