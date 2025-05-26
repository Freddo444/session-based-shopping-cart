<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Cart</title>
</head>

<body>
    @session('success')
        <div class="alert alert-success">
            <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('success') }}
        </div>
    @endsession

    @session('error')
        <div class="alert alert-danger">
            <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('error') }}
        </div>
    @endsession
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
                            <td><img src="{{ $item['product_image'] }}" alt="{{ $item['product_name'] }}"
                                    width="50">
                            </td>
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
                {{-- <h3>Total: {{ number_format(array_sum(array_column(session('cart'), 'product_price'))) }}
                    {{ session('cart')[0]['currency'] }}</h3> --}}
                <form action="#" method="post">
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
</body>

</html>
