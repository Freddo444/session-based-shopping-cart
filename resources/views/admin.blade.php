<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</head>

<style>

</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-light" style="height: 100vh;left: 0; top: 0;">
                <h2>Admin Dashboard</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Manage Products</a></li>
                    <li class="list-group-item"><a href="#">Manage Orders</a></li>
                    <li class="list-group-item"><a href="#">Manage Users</a></li>
                    <li class="list-group-item"><a href="#">Settings</a></li>
                    <li class="list-group-item"><a href="#">Logout</a></li>
                </ul>
            </div>
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
</body>

</html>
