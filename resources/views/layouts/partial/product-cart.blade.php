<div class="mini-cart">
<div class="mini-cart-img">
        <a href="#">
            <img class="mini-img" src="{{ $data['options']['image']}}" alt="">
        </a>
    </div>
    <div class="mini-cart-info">
        <a href="" class="mini-info-title">{{ $data['name']}}</a>
        <span class="mini-info-quantity">{{ $data['qty']}}</span>
        <span class="mini-info-price">{{ $data['price']}}d</span>
        <span class="mini-info-remove">
            <a href="">
                <i class="ti-close"></i>
            </a>
        </span>
    </div>
</div>
  
