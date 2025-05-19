@extends('layouts.header')
@section('content')
    <style>
        .home {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            background-color: #f8f9fa;
        }

        .home-content {
            max-width: 50%;
        }

        .home-content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .home-content p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .home-content .btn {
            background-color: rgb(4, 67, 138);
            color: white;
            padding: 15px 30px;
            border-radius: 5px;
            text-decoration: none;
        }

        .home-image img {
            max-width: 100%;
            height: auto;
        }

        .home-image {
            max-width: 50%;
        }

        .home-image img {
            margin-top: 3em;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .home-content .btn:hover {
            background-color: #0056b3;
            transition: background-color 0.3s ease;
        }

        section {
            width: 100%;
            height: 100vh;

        }

        .product-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: calc(60% - 20px);
            transform: translate(37%);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .product-card h3 {
            margin-top: 10px;
            font-size: 18px;
        }

        .product-card p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .product-card .btn {
            background-color: rgb(4, 67, 138);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .product-card .btn:hover {
            background-color: #0056b3;
            transition: background-color 0.3s ease;
        }

        h2 {
            text-align: center;
            margin-top: 2em;
            font-size: 2.5em;
            color: rgb(4, 67, 138);
        }

        h2::after {
            content: '';
            display: block;
            width: 50px;
            height: 4px;
            background-color: rgb(4, 67, 138);
            margin: 10px auto;
        }


        .product-card img:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .product-grid {
            padding: 2em;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            width: 100%;
            margin: 100px auto;

        }
    </style>
    <div class="home">
        <div class="home-content">
            <h1>Welcome to Our E-commerce Store</h1>
            <p>Discover the best products at unbeatable prices.</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="home-image">
            <img src="https://webandcrafts.com/_next/image?url=https%3A%2F%2Fadmin.wac.co%2Fuploads%2FWhat_is_E_commerce_and_What_are_its_Applications_2_d2eb0d4402.jpg&w=4500&q=90"
                alt="E-commerce Store">
        </div>
    </div>
    <section id="products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65034bdac9e8c78c1728ff0b/Apple-iPhone-15-Pro-lineup-natural-titanium-geo/960x0.jpg?height=711&width=711&fit=bounds"
                        alt="iphone 16 pro max">
                    <h3>Iphone 16Pro Max</h3>
                    <p>$1,500</p>
                    <a href="#" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65034bdac9e8c78c1728ff0b/Apple-iPhone-15-Pro-lineup-natural-titanium-geo/960x0.jpg?height=711&width=711&fit=bounds"
                        alt="iphone 16 pro max">
                    <h3>Iphone 16Pro Max</h3>
                    <p>$1,500</p>
                    <a href="#" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65034bdac9e8c78c1728ff0b/Apple-iPhone-15-Pro-lineup-natural-titanium-geo/960x0.jpg?height=711&width=711&fit=bounds"
                        alt="iphone 16 pro max">
                    <h3>Iphone 16Pro Max</h3>
                    <p>$1,500</p>
                    <a href="#" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65034bdac9e8c78c1728ff0b/Apple-iPhone-15-Pro-lineup-natural-titanium-geo/960x0.jpg?height=711&width=711&fit=bounds"
                        alt="iphone 16 pro max">
                    <h3>Iphone 16Pro Max</h3>
                    <p>$1,500</p>
                    <a href="#" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65034bdac9e8c78c1728ff0b/Apple-iPhone-15-Pro-lineup-natural-titanium-geo/960x0.jpg?height=711&width=711&fit=bounds"
                        alt="iphone 16 pro max">
                    <h3>Iphone 16Pro Max</h3>
                    <p>$1,500</p>
                    <a href="#" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65034bdac9e8c78c1728ff0b/Apple-iPhone-15-Pro-lineup-natural-titanium-geo/960x0.jpg?height=711&width=711&fit=bounds"
                        alt="iphone 16 pro max">
                    <h3>Iphone 16Pro Max</h3>
                    <p>$1,500</p>
                    <a href="#" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65034bdac9e8c78c1728ff0b/Apple-iPhone-15-Pro-lineup-natural-titanium-geo/960x0.jpg?height=711&width=711&fit=bounds"
                        alt="iphone 16 pro max">
                    <h3>Iphone 16Pro Max</h3>
                    <p>$1,500</p>
                    <a href="#" class="btn">View Details</a>
                </div>
                <div class="product-card">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/65034bdac9e8c78c1728ff0b/Apple-iPhone-15-Pro-lineup-natural-titanium-geo/960x0.jpg?height=711&width=711&fit=bounds"
                        alt="iphone 16 pro max">
                    <h3>Iphone 16Pro Max</h3>
                    <p>$1,500</p>
                    <a href="#" class="btn">View Details</a>
                </div>
            </div>
        </div>

    </section>
@endsection
