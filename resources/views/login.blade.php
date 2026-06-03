<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - EduLearn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
            font-family: sans-serif;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            width: 900px;
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            display: flex;
            gap: 40px;
        }

        .login-left {
            flex: 1;
        }

        .login-right {
            flex: 1;
            background: #ddd;
            border-radius: 20px;
        }

        .brand {
            font-size: 28px;
            font-weight: bold;
            color: #2f5d7c;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 50px;
            padding-left: 45px;
            height: 50px;
            background: #eee;
            border: none;
        }

        .input-group-text {
            border: none;
            background: transparent;
            position: absolute;
            z-index: 10;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .btn-login {
            background: #4f7ea3;
            border-radius: 50px;
            height: 50px;
            color: white;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #3c6a8a;
        }

        .extra-text {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .extra-text a {
            color: #4f7ea3;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-box">

        <!-- LEFT -->
        <div class="login-left">

            <div class="brand">
                <i class="bi bi-mortarboard"></i> EduLearn
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="form-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="text" name="email" class="form-control" placeholder="Masukan Email/NIS Anda">
                </div>

                <!-- Password -->
                <div class="form-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Kata sandi Anda">
                </div>

                <!-- Button -->
                <button class="btn btn-login w-100 mt-3">
                    Masuk
                </button>

                <!-- Extra -->
                <div class="extra-text">
                    Belum punya akun? <a href="{{ route('register') }}">Daftar</a><br>
                    <a href="{{ route('forgot-password') }}">Lupa Kata sandi?</a>
                </div>

            </form>

        </div>

        <!-- RIGHT (ILUSTRASI) -->
        <div class="login-right d-none d-md-block"></div>

    </div>
</div>

</body>
</html>