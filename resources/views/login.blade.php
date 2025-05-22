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
    }

    body {
        font-family: 'poppins', sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        margin: 100px auto;
        border-radius: 10px;
        background-color: #fff;
        padding: 20px;
        width: 400px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<body>
    <div class="container">
        <div class="form-group">
            <div class="title">
                <h3>Login Form</h3>
            </div>
            <form action="{{ route('login.auth') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="btn">
                    <button type="submit" class="btn">Login</button>
                </div>
            </form>
            <div class="register">
                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
            </div>
        </div>
    </div>
</body>

</html>
