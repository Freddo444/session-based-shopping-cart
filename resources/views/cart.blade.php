@extends('layouts.header')

@section('content')
    <style>
        .cart-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cart-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .cart-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-container th,
        .cart-container td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .cart-container th {
            background-color: #f4f4f4;
        }

        .cart-container img {
            max-width: 50px;
            height: auto;
        }

        .cart-total {
            text-align: right;
            margin-top: 20px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .back-to-products {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <div class="cart-container">
        <h2>Your Cart</h2>
        @if (session('cart') && count(session('cart')) > 0)
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
                    @foreach (session('cart') as $key => $item)
                        <tr>
                            <td>{{ $item['product_name'] }}</td>
                            <td>{{ number_format($item['product_price']) }} {{ $item['currency'] }}</td>
                            <td><img src="{{ $item['product_image'] }}" alt="{{ $item['product_name'] }}" width="50"></td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>
                                <form action="{{ route('deleteCart') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $key }}">
                                    <button type="submit" class="btn">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="cart-total">
                <h3>Total: {{ number_format(array_sum(array_column(session('cart'), 'product_price'))) }}
                    {{ session('cart')[0]['currency'] }}</h3>
                <form action="{{ route('checkout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn">Checkout</button>
                </form>
            </div>
        @else
            <p>Your cart is empty.</p>
        @endif

        <div class="back-to-products">
            <a href="{{ route('index') }}" class="btn">Back to Products</a>

        </div>
    </div>
