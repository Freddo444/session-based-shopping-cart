@extends('layouts.header')

@section('content')
    <style>
        .card {
            padding: 20px;
            margin: 20px;
            text-align: justify;
        }

        .card-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 100px;
            margin-bottom: 100px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.2s;
        }

        img {
            width: 400px;
            height: 400px;
            border-radius: 10px;
            object-fit: cover;
        }
    </style>
    <div class="card">
        <div class="card-details">
            <div class="product-img">
                <img src="https://imageio.forbes.com/specials-images/imageserve/65034bdac9e8c78c1728ff0b/Apple-iPhone-15-Pro-lineup-natural-titanium-geo/960x0.jpg?height=711&width=711&fit=bounds"
                    alt="iphone 16 pro max">
            </div>
            <div class="product-desc">
                <div class="title">
                    <h3>Product Details</h3>
                </div>
                <div class="part1">
                    <div class="product-name">
                        <h3>Iphone 16Pro Max</h3>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus. Quisquam,
                            voluptatibus. Quisquam, voluptatibus. Quisquam, voluptatibus. Quisquam, voluptatibus.
                            Quisquam, voluptatibus.</p>

                    </div>
                    <div class="product-price">
                        <h3>$1,500</h3>
                    </div>
                    <div class="cart">
                        <a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a>
                    </div>

                </div>
            </div>
        </div>
        {{-- <div class="title">
            <h2>Product Details</h2>
        </div> --}}
    </div>
@endsection
