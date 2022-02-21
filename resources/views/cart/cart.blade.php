@extends('layouts.app')
@section('title','cart')
@section('content')
<div class="cart">
    <div class="heading-cart">Giỏ hàng của bạn</div>
    <div class="cart-content">
        <div class="row">
            <div class="cart-main">
                @php $content = !empty(\Cart::content()) ? \Cart::content() : '' @endphp

                <div class="cart-main-title">Bạn đang có <span>{{ \Cart::content()->count()}}</span> sản phẩm trong giỏ hàng</div>
                @if(!empty($content))
                @foreach($content as $data)

                <div class="cart-main-table" data-value="{{$data->rowId}}">
                    <div class="cart-main-item">
                        <div class="cart-item-img">
                            <img class="cart-img" src="{{ $data->options['image']}}" alt="">
                        </div>
                        <div class="cart-item-info">
                            <div class="cart-item-infor-title">{{$data->name}}</div>
                            <div class="cart-item-infor-price">{{ $data->price}}d</div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-secondary" style="height:25px; width:25px">-</button>
                                <button type="button" class="btn btn-secondary" style="height:25px; width:25px">{{ $data->qty}}</button>
                                <button type="button" class="btn btn-secondary" style="height:25px; width:25px">+</button>
                            </div>
                            <span class="cart-item-infor-delete" style="cursor: pointer" title="xóa sản phẩm này">
                                <i class="ti-trash"></i>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif


            </div>
            <div class="cart-info">
                <div class="cart-info-content">
                    <div class="cart-info-title">Thông tin đơn hàng</div>
                    <div class="cart-info-price">
                        <p class="cart-info-price-detail">
                            Tổng tiền:
                            @if( \Cart::content()->count() > 0)
                            @php 
                            $total = str_replace(',', '', \Cart::total());
                            $total = intval($total);
                        
                            @endphp
                            <span>{{ number_format($total)}}₫</span>
                            @else
                            <span>0₫</span>
                            @endif                            
                        </p>
                    </div>
                    <div class="cart-info-payment">
                        <a href="" class="cart-info-payment-btn">Thanh toán</a>
                    </div>
                    <a href="#" class="cart-backshopping">
                        <i class="ti-back-right"></i>
                        Tiếp tục mua hàng
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var length_item = $('.cart-main-table').length;
        console.log(length_item)
        for (let i = 0; i < length_item; i++) {
            $('.cart-main-table:eq(' + i + ') .cart-item-infor-delete').click(function() {
                var del_id = $('.cart-main-table:eq(' + i + ')').attr('data-value');
                if(confirm('Bạn có chắc chắn muốn xóa sản phẩm này không ?')) {
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