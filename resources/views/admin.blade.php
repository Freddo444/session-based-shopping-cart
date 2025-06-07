@extends('layouts.admin-header')
@section('content')
    <div class="col-md-9 p-5">
        <marquee behavior="scroll" direction="left">
            <p class="card-text text-danger">Here you can view the latest statistics and manage your e-commerce
                platform
                efficiently.</p>
        </marquee>

        <h3>Welcome, Admin!</h3>
        <p>Use the menu on the left to manage products, orders, users, and settings.</p>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card p-3">
            <h5 class="card-title">Dashboard Overview</h5>
            <div class="card-body p-5" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                @php
                    $totalProducts = App\Models\product::count();
                    $totalUsers = App\Models\User::count();
                    $totalCarts = session()->has('cart') ? count(session('cart')) : 0;
                @endphp
                <div class="statistics-card">
                    <div class="card products bg-success text-light">
                        <div class="card-body">
                            <h5 class="card-title">Total Products</h5>
                            <p class="card-text">{{ $totalProducts }}</p>
                        </div>
                    </div>
                </div>
                <div class="statistics-card">
                    <div class="card users bg-warning text-dark">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text">{{ $totalUsers }}</p>
                        </div>
                    </div>
                </div>
                <div class="statistics-card ">
                    <div class="card carts bg-info text-light">
                        <div class="card-body">
                            <h5 class="card-title">Total Carts</h5>
                            <p class="card-text">{{ $totalCarts }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
