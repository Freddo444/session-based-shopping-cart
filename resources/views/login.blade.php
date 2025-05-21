<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>

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
        </div>
    </div>
</body>

</html>
