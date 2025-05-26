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
            <div class="cart-display">
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (session('cart') && count(session('cart')) > 0)
                            @foreach (session('cart') as $item)
                                <tr>
                                    <td>{{ $item['product_name'] }}</td>
                                    <td>{{ number_format($item['product_price']) }}</td>
                                    <td>{{ $item['currency'] }}</td>
                                    <td>{{ $item['product_image'] }}</td>
                                    <td>{{ $item['quantity'] }}</td>

                                    <form action="{{ route('deleteCart') }}" method="post">
                                        @csrf
                                        <input type="text" name="product_id" value="{{ $item['id'] }}">
                                        <td><button type="submit" class="cancel-cart">&times;</button></td>
                                    </form>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" style="text-align: center">No Item in Cart</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
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
