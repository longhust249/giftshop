@extends('layouts.app')
@section('title', 'Contact')
@section('content')

    <?php
    if (isset($_POST["submit"])) {

        $name = $_POST["name"];
        $mail = $_POST["email"];
        $phone = $_POST["phone"];
        $text = $_POST["text"];

        $sql = "INSERT INTO user_contact(
            
            user_name,
            user_email,
            user_phone,
            user_mess
        )
        VALUES(
            
            '$name',
            '$mail',
            '$phone',
            '$text'
        )";
        // var_dump($sql);
        mysqli_query($conn, $sql);
    }
    ?>
    <div class="contact-home">
        <div class="row">
            <div class="contact">
                <p class="contact-title">Liên Hệ</p>
                <p class="contact-para">Nếu bạn có gì thắc mắc hãy liên hệ với chúng tôi qua địa chỉ</p>
                <div class="contact-info">
                    <ul class="contact-info-list">
                        <li class="d-flex">
                            <p class="contact-left">ĐIỆN THOẠI</p>
                            <p class="contact-right">0767278893</p>
                        </li>
                        <li class="d-flex">
                            <p class="contact-left">ĐỊA CHỈ</p>
                            <p class="contact-right">Số 68, Q.Hai Bà Trưng, Hà Nội</p>
                        </li>
                        <li class="d-flex">
                            <p class="contact-left">EMAIL</p>
                            <p class="contact-right">thejoyboxvn@gmail.com</p>
                        </li>
                        <li class="d-flex">
                            <p class="contact-left">THỜI GIAN LÀM VIỆC</p>
                            <p class="contact-right">Thứ 2 đến Thứ 6 từ 8h30 đến 18h; Thứ 7 và Chủ nhật từ 8h00 đến
                                17h00</p>
                        </li>
                        <li class="d-flex">
                            <p class="contact-left">MẠNG XÃ HỘI</p>
                            <div class="contact-right">
                                <ul class="footer-item_social">
                                    <li class="footer-item_social fb">
                                        <a href="#" class="">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="footer-item_social ins">
                                        <a href="#" class="">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="footer-item_social ptr">
                                        <a href="#" class="">
                                            <i class="ti-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="footer-item_social tw">
                                        <a href="#" class="">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="question">
                <p class="contact-title">Gửi thắc mắc cho chúng tôi</p>
                <p class="contact-para">Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể .</p>
                <form method="POST" action="">
                    <div class="row">
                        <div class="contact-input-half">
                            <input type="text" name="name" placeholder="Tên của bạn" required id="" class="form-control">
                        </div>
                        <div class="contact-input-half">
                            <input type="email" name="email" placeholder="Email của bạn" required id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="contact-input-full">
                            <input type="number" name="phone" placeholder="Số điện thoại của bạn" required id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="contact-input-full mess">
                            <input type="text" name="text" placeholder="Nội dung" required id="" class="form-control">
                        </div>
                    </div>
                    <p class="user-list-para2">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</p>
                    <button type="submit" name="submit" class="form-submit">GỬI CHO CHÚNG TÔI</button>
                    <!-- <input class="form-submit" type="submit" value="GỬI CHO CHÚNG TÔI"> -->
                </form>

            </div>
        </div>
    </div>
    @endsection 