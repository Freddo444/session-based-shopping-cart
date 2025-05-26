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
            <span class="close" onclick="this.parentElement.display='none';">&times;</span>
            {{ session('error') }}
        </div>
    @endsession

    <div class="container">
        <div class="form-group">
            <div class="title">
                <h3>Register Form</h3>
            </div>
            <form action="{{ route('register.auth') }}" method="post">
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
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password">Repeat Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="btn">
                    <button type="submit" class="btn">Register</button>
                </div>
            </form>
            <div class="register">
                <p>Do you have an account? <a href="{{ route('login') }}">Login here</a></p>
                <p><a href="{{ route('index') }}">Back To Home</a></p>
            </div>
        </div>
    </div>
</body>

</html>
