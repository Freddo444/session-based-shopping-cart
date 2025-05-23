<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        overflow-y: hidden;
    }

    body {
        font-family: 'poppins', sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        margin: 60px auto;
        border-radius: 10px;
        background-color: #fff;
        padding: 20px;
        width: 400px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn {
        text-align: center;
    }

    .btn button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn button:hover {
        background-color: #0056b3;
    }

    .title {
        text-align: center;
        margin-bottom: 20px;
    }

    .title h3 {
        font-size: 24px;
        color: #333;
    }

    .register {
        text-align: center;
        margin-top: 20px;
    }

    .register p {
        font-size: 14px;
        color: #666;
    }

    .register a {
        color: #007bff;
        text-decoration: none;
    }

    .register a:hover {
        text-decoration: underline;
    }

    .form-group input:focus {
        border-color: #007bff;
        outline: none;
    }

    .form-group input::placeholder {
        color: #999;
    }

    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .alert-success {
        background-color: #4CAF50;
    }

    .alert-danger {
        background-color: #f44336;
    }

    .close {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
    }
</style>

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
            </div>
        </div>
    </div>
</body>

</html>
