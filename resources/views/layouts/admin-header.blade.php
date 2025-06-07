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
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: #007bff;
    }

    ul li {
        border: none;
        border-bottom: 1px solid #ddd;
        padding: 10px;
        transition: background-color 0.3s;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-light" style="height: 100vh;left: 0; top: 0;">
                <h2 class="" style="border-bottom: 1px solid #ddd; padding: 20px;">Admin Dashboard</h2>
                <ul class="list-group">
                    <li class=""><a href="#">Manage Products</a></li>
                    <li class=""><a href="#">Manage Orders</a></li>
                    <li class=""><a href="#">Manage Users</a></li>
                    <li class=""><a href="#">Settings</a></li>
                    <li class=""><a href="#">Logout</a></li>
                </ul>
            </div>
            @yield('content')
        </div>
</body>

</html>
