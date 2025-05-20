@extends('layouts.header')
@section('content')
    @session('success')
        <div class="alert alert-success">
            <h5>{{ $value }}</h5>
            <div class="close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
    @endsession
    @session('error')
        <div class="alert alert-danger">
            <h5>{{ $value }}</h5>
        </div>
    @endsession
    @session('warning')
        <div class="alert alert-warning">
            <h5>{{ $value }}</h5>
        </div>
    @endsession
    <div class="home">
        <div class="home-content">
            <h1>Welcome to Our E-commerce Store</h1>
            <p>Discover the best products at unbeatable prices.</p>
            <a href="{{ route('view-product') }}" class="btn">Shop Now</a>
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
                @foreach ($products as $product)
                    <div class="product-card">
                        <img src="{{ $product->productImage }}" alt="{{ $product->productName }}">
                        <h3>{{ $product->productName }}</h3>
                        <p>{{ $product->productPrice }} {{ $product->currency }}</p>
                        <a href="{{ route('view-product', $product->id) }}" class="btn">View Details</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We are a leading e-commerce platform offering a wide range of products at competitive prices. Our mission
                is to provide our customers with the best shopping experience possible.</p>
            <a href="#" class="btn">Learn More</a>
        </div>

    </section>
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="card">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script>
        let alert = document.querySelector('.alert');
        let close = document.querySelector('.close');
        close.addEventListener('click', function() {
            alert.style.display = 'none';
        })
    </script>
@endsection
