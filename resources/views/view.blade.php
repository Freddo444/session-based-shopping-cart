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
                        <h3>Price: {{ Number_format($product->productPrice) }} {{ $product->currency }}</h3>
                    </div>
                    <div class="cart">

                        @if (Auth::check())
                            <form action="{{ route('add-cart', $product->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="product_name" value="{{ $product->productName }}">
                                <input type="hidden" name="product_price" value="{{ $product->productPrice }}">
                                <input type="hidden" name="product_image" value="{{ $product->productImage }}">
                                <input type="hidden" name="currency" value="{{ $product->currency }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn"><i class="fa-solid fa-cart-shopping"></i> Add to
                                    Cart</button>
                            </form>
                        @else
                            <a href="#" id="validUser"
                                onclick="alert('Please login to add cart'); window.location.href='{{ route('login') }}'; return false"><i
                                    class="fa-solid fa-cart-shopping"></i> Add to
                                Cart</a>
                        @endif
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script>
        // let validUser = document.getElementById('validUser');
        // validUser.addEventListener('click', function(){
        //     alert('Please login to add items to your cart');
        //     window.location.href= "{{ route('login') }}";
        //     return false;
        // })
    </script>
@endsection
