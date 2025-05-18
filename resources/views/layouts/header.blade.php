<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ ENV('APP_NAME') }}</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        transition: all 0.3s ease;
        font-family: 'poppins', sans-serif
    }

    .container .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #f8f8f8;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        position: fixed;
        z-index: 9999;
        width: 100%;
    }
    .container .header .navbar {
        display: flex;
        align-items: center;
    }
    .container .header .navbar ul {
        list-style: none;
        display: flex;
        gap: 20px;
    }
    .container .header .navbar ul li {
        display: inline-block;
        padding: 20px;
    }
    .container .header .navbar ul li a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
        text-transform: uppercase;
    }
    .container .header .navbar ul li a:hover {
        background-color:rgb(4, 67, 138);
        color: #fff;
        padding: 10px;
        border-radius: 5px;
    }
    .container .header .search-bar {
        display: flex;
        align-items: center;
    }
    .container .header .search-bar input[type="text"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }
    .container .header .search-bar input:focus {
        outline: none;
        border-color: rgb(4, 67, 138);
    }
    .container .header .search-bar button {
        padding: 10px 20px;
        background-color: rgb(4, 67, 138);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .container .header .search-bar button:hover {
        background-color:rgb(4, 67, 138);
    }
    .container .header .cart {
        display: flex;
        align-items: center;
    }
    .container .header .cart a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
        margin-left: 20px;
    }
    .container .header .cart a:hover {
        color: rgb(4, 67, 138);
    }
    .container .header .auth {
        display: flex;
        align-items: center;
    }
    .container .header .auth a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
        margin-left: 20px;
    }
    .container .header .auth a:hover {
        color: rgb(4, 67, 138);
    }
    .container .header .auth a:first-child {
        background-color: rgb(4, 67, 138);
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
    }
    .container .header .auth a:first-child:hover {
        background-color: rgb(4, 67, 138);
    }
    .container .header .auth a:last-child {
        background-color: rgb(4, 67, 138);
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
    }
    
</style>

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
                    <a href="">Logout</a>
                @else
                    <a href="">Login</a>
                    <a href="">Register</a>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
