
<?php

    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $sex = $_POST["sex"];
        $birthday = $_POST["birthday"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO user(  
            name,
            sex,
            birthday,
            email,
            password
        )
        VALUES(
            
            '$name',
            '$sex',
            '$birthday',
            '$email',
            '$password'
        )";
        // var_dump($sql);
        mysqli_query($conn, $sql);
    }
    ?>
@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="register">
    <div class="make-account">
    <div class="noti-success">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div>

                    @endif
                </div>
        <p class="make-account-title">Tạo tài khoản</p>
        <form action="" method="POST">
            <div class="account-input">
                <input type="text" name="name" placeholder="Họ & Tên" required id="" class="form-control">
            </div>
            <div class="account-input">
                <input type="radio" name="sex" value="0" required id="" class="radio">
                <p class="male-text">Nữ</p>
                <input type="radio" name="sex" value="1" required id="" class="radio">
                <p class="male-text">Nam</p>
            </div>
            <div class="account-input">
                <input type="number" name="birthday" placeholder="mm/dd/yyyy" required id="" class="form-control">
            </div>
            <div class="account-input">
                <input type="text" name="email" placeholder="Email" required id="" class="form-control">
            </div>
            <div class="account-input">
                <input type="text" name="password" placeholder="Mật khẩu" required id="" class="form-control">
            </div>
            <p class="user-list-para2">This site is protected by reCAPTCHA and the Google <a
                        href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</p>
                        <button type="submit" name="submit" class="form-account-submit">Đăng ký</button>
        
        </form>
    </div>
</div>
@endsection  


    
