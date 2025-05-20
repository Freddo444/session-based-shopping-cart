@extends('layouts.header')

@section('content')

    <div class="card">
        <div class="card-details">
            <div class="product-img">
                <img src="{{ $product->productImage }}" alt="{{ $product->productName }}">
            </div>
            <div class="product-desc">
                <div class="title">
                    <h3>Product Details</h3>
                </div>
                <div class="part1">
                    <div class="product-name">
                        <h3>{{ $product->productName }}</h3>
                    </div>
                    <div class="description">
                        <p>{{ $product->productDescription }}</p>

                    </div>
                    <div class="product-price">
                        <h3>Price: {{ $product->productPrice }} {{ $product->currency }}</h3>
                    </div>
                    <div class="cart">
                        <a href="{{ route('add-cart',$product->id) }}"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
