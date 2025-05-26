<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <title>Login Page</title>
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
    <div class="container">
        <div class="form-group">
            <div class="title">
                <h3>Login Form</h3>
            </div>
            <form action="{{ route('login.auth') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="btn">
                    <button type="submit" class="btn">Login</button>
                </div>
            </form>
            <div class="register">
                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                <p><a href="{{ route('index') }}">Back To Home</a></p>
            </div>
        </div>
    </div>
</body>

</html>
