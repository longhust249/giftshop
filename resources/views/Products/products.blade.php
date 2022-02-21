@extends('layouts.app')
@section('title', 'Product')
@section('content')
<div class="table-product">
    <div class="heading-home">
        <h2 class="title-second">{{ $title }}</h2>
    </div>
    <div class="wrapper-collection-1">
        <div class="row product-list">
            @foreach ($products as $product)
            <div class="product-item">
                <a href=" {{ route('product.detail', [$product->id])}}">
                    <img style="height:219px; width:219px" class="pro-img" src="{{ $product->image }}" alt="">
                    <img style="height:219px; width:219px" class="pro-img-back" src="{{ $product->img_hover }}" alt="">
                </a>

                <div class="product-detail-item">
                    <a class="pro-name" href="#">{{ $product->name }} </a>
                    <p class="pro-price">{{ number_format($product->price) }}₫</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="page-numb">
            {{ $products->links('vendor.pagination.custom') }}
        </div>

    </div>
</div>

@endsection