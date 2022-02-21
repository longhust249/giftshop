@extends('layouts.app')
@section('title','Product Detail')
@section('content')
<div class="product-detail">
    <div class="row">
        @foreach ($products as $product)
        <div class="product-detail-img">
            <!-- <div class="row"> -->
            <div class="product-thumb">
                <img class="product-thumb-detail" src="{{ $product->img_thumb1 }}" alt="">
                <img class="product-thumb-detail" src="{{ $product->img_thumb2}}" alt="">
                <img class="product-thumb-detail" src="{{ $product->img_thumb3}}" alt="">
                <img class="product-thumb-detail" src="{{ $product->img_thumb4}}" alt="">
                <img class="product-thumb-detail" src="{{ $product->img_thumb5}}" alt="">

            </div>
            <div class="product-img">
                <img class="product-img-detail" src="{{ $product->img_thumb1 }}" alt="">
            </div>
            <!-- </div> -->
        </div>
        <div class="product-detail-info">
            <div class="product-detail-heading" data-value=" {{ $product->id}}">{{ $product->name }}</div>
            <div class="product-detail-price" data-value=" {{ $product->price}}">{{ number_format($product->price) }}₫</div>
            <div class="product-quatity">
                <div style="color: white;" class="btn-group" role="group">
                    <button type="button" class="btn btn-secondary edit-qty minus" onclick="minusQty('qty-1')" style="font-size: 20px;">-</button>
                    <input type="button" value="1" id="qty-1" class="btn btn-secondary" style="font-size: 20px;"></input>
                    <button type="button" class="btn btn-secondary edit-qty plus" onclick="plusQty('qty-1')" style="font-size: 20px;">+</button>
                </div>
                <div class="product-add-cart">

                    <button id="product-add-cart" type="submit" name="submit" class="form-account-submit addCart">Thêm vào giỏ</button>
                </div>
            </div>

            <ul class="product-policy">
                <li>
                    <span class="png"> <img src="/assets/img/png/product_deliverly_1_icons.png" alt="" width="30px"></span>
                    Cam kết 100% chính hãng
                </li>
                <li>
                    <span class="png"><img src="/assets/img/png/product_deliverly_2_icons.png" alt="" width="30px"></span>
                    Giao hàng dự kiến:
                    Thứ 6 - Thứ 4 từ 9h00 - 20h00
                </li>
                <li>
                    <span class="png"><img src="/assets/img/png/product_deliverly_3_icons.png" alt="" width="30px"></span>
                    Sản phẩm không nhận đổi trả
                </li>
            </ul>
        </div>

    </div>

    <div class="product-detail-disc">
        <ul class="detail-disc-title">
            <li class="detail-disc-heading discribe">MÔ TẢ</li>
            <li class="detail-disc-heading turnback">CHÍNH SÁCH ĐỔI TRẢ</li>
            <li class="detail-disc-heading secury">CHÍNH SÁCH BẢO MẬT</li>
        </ul>
        <div class="detail-disc-para-discribe">
            <p class="detail-disc-para1">Hộp quà tặng không thể hoàn hảo hơn cho kỷ niệm ngày cưới/ kỷ niệm ngày yêu nhau. {{ $product->name }} là hộp quà giúp bạn lưu giữ những kỷ niệm “khoảnh khắc mình bên nhau”. Cùng tận hưởng một ngày thật chill và tranh thủ ôn lại kỷ niệm cũ và tạo ra thật nhiều kỷ niệm mới, bạn nha!</p>
            <p class="detail-disc-para2">Hộp {{ $product->name }} của mình gồm có:</p>
            <p class="detail-disc-para3">
                {{ $product->description }}
            </p>
        </div>
        <div class="detail-disc-para-turnback">
            <p class="detail-disc-para4">1. Điều kiện đổi trả</p>
            <p class="detail-disc-para5">Quý khách có thể đổi trả hàng trong các trường hợp sau:

                Hộp quà bị hư hại, móp méo nặng nề, bị rách, ướt... trong quá trình vận chuyển.<br>
                Sau khi mở hộp quà, món quà bị vỡ, bể, rách, không đủ số lượng hoặc mẫu mã như thông tin trên web hoặc như thỏa thuận ban đầu.<br>
                Một số món quà khi hết hàng, The Joy Box sẽ thay đổi màu sắc, kiểu dáng hoặc loại hàng ngang giá cho quý khách. Chúng tôi sẽ thông báo qua email/ điện thoại cho Quý khách trước khi gửi hộp quà.<br>
                Khách hàng gửi hình ảnh tình trạng hộp quà hoặc món hàng sau khi unbox, chứng minh sự thiếu sót trên để hoàn thành việc hoàn trả/đổi trả hàng hóa.<br>
            </p>
            <p class="detail-disc-para6">
                2. Quy định về thời gian thông báo và gửi sản phẩm đổi trả
            </p>
            <p class="detail-disc-para7">Thời gian thông báo đổi trả: trong vòng 7 ngày kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu quà tặng hoặc bể vỡ.
                Thời gian gửi chuyển trả sản phẩm: trong vòng 14 ngày kể từ khi nhận sản phẩm.<br>
                Địa điểm đổi trả sản phẩm: khách hàng có thể mang hàng trực tiếp đến cửa hàngThe Joy Box hoặc chúng tôi sẽ hỗ trợ bạn chuyển hoàn đơn hàng.<br>
                Trong trường hợp Quý Khách hàng có ý kiến đóng góp/khiếu nại liên quan đến chất lượng sản phẩm, Quý Khách hàng vui lòng liên hệ hotline 077 9922 987 hoặc email thejoyboxvn@gmail.com<br>
            </p>
        </div>
        <div class="detail-disc-para-secury">
            <p class="detail-disc-para">Chính sách bảo mật này nhằm giúp Quý khách hiểu về cách website thu thập và sử dụng thông tin cá nhân của mình thông qua việc sử dụng trang web, bao gồm mọi thông tin có thể cung cấp thông qua trang web khi Quý khách đăng ký tài khoản, đăng ký nhận thông tin liên lạc từ chúng tôi, hoặc khi Quý khách mua sản phẩm, dịch vụ, yêu cầu thêm thông tin dịch vụ từ chúng tôi.</p>
            <p class="detail-disc-para">Chúng tôi sử dụng thông tin cá nhân của Quý khách để liên lạc khi cần thiết như giao nhận hàng hóa, trả lời các câu hỏi hoặc gửi thông tin chi tiết và proposal, báo giá theo yêu cầu của Quý khách.</p>
            <p class="detail-disc-para">
                Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất để bảo vệ thông tin cũng như việc thanh toán của khách hàng.
            </p>
            <p class="detail-disc-para">Mọi thông tin giao dịch sẽ được bảo mật ngoại trừ trong trường hợp cơ quan pháp luật yêu cầu.<br>
            </p>
        </div>
        @endforeach
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

    var addCart = document.querySelector('.addCart')
    var bagList = document.getElementById('bag-list')
    document.onclick = function(e) {
        if (e.target.id != 'bag-list' && e.target.class != '.addCart') {
            addCart.classList.remove('on-bag-list');
            bagList.classList.remove('on-bag-list')
        }
    }

    addCart.onclick = function() {
        //  addCart.classList.toggle('on-bag-list');
        bagList.classList.toggle('on-bag-list')
    }

    function plusQty(qtyInput) {
        var qty = parseInt($('#' + qtyInput).val());
        if (qty < 100) {
            qty++;
            $('#' + qtyInput).val(qty);
            $('#' + qtyInput).attr('data-value', qty);
        } else {
            $('#' + qtyInput).val(100);
        }
    }

    function minusQty(qtyInput) {
        var qty = parseInt($('#' + qtyInput).val());
        if (qty > 1) {
            qty--;
            $('#' + qtyInput).val(qty);
            $('#' + qtyInput).attr('data-value', qty);
        } else {
            $('#' + qtyInput).val(1);
        }
    }
    $(document).ready(function() {
        var id = $('.product-detail-heading').attr('data-value');
        var name = $('.product-detail-heading').text();
        var price = $('.product-detail-price').attr('data-value');
        var qty = 1;
        var image = $('.product-img-detail').attr('src');
        console.log(id, name, price, qty, image)
        $('.addCart').click(function(e) {
            e.preventDefault();
            qty = $('#qty-1').val();
            $.ajax({
                url: "{{ route('cart.add')}}",
                type: 'post',
                data: {
                    _token: '{{ csrf_token()}}',
                    price: price,
                    name: name,
                    qty: qty,
                    id: id,
                    image: image,
                },
                success: function(data) {
                    $('.list-item').append(data.html);
                    location.reload()
                    alert('Bạn đã thêm vào giỏ hàng thành công')
                }
            })
        })

        //delete item
        var length_item = $('.mini-cart').length;
        console.log(length_item)
        for (let i = 0; i < length_item; i++) {
            $('.mini-cart:eq(' + i + ') .mini-info-remove').click(function() {
                var del_id = $('.mini-cart:eq(' + i + ')').attr('data-value');
                if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này không ?')) {
                    $.ajax({
                        url: "{{ route('cart.delete') }}",
                        type: 'post',
                        data: {
                            _token: "{{ csrf_token() }}",
                            del_id: del_id,
                        },
                        success: function(data) {
                            if (data.success) {
                                location.reload()
                            }
                        }
                    })
                }

            })
        }

    })
</script>

@endsection