<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ ENV('APP_NAME') }}</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button type="submit">Search</button>
            </div>
            <div class="cart">
                <a href="#"><i class="fa-solid fa-cart-shopping"></i> Cart (0)</a>
            </div>
            <div class="auth">
                @if (Auth::check())
                    <a href="{{ route('logout') }}">Logout</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
