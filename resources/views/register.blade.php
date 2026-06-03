<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar - EduLearn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
            font-family: sans-serif;
        }

        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-box {
            width: 950px;
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            display: flex;
            gap: 40px;
        }

        .register-left {
            flex: 1;
        }

        .register-right {
            flex: 1;
            background: #ddd;
            border-radius: 20px;
        }

        .back {
            margin-bottom: 20px;
            color: #333;
            text-decoration: none;
        }

        .form-control {
            border-radius: 50px;
            padding-left: 45px;
            height: 50px;
            background: #eee;
            border: none;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .btn-daftar {
            background: #4f7ea3;
            border-radius: 50px;
            height: 50px;
            color: white;
            font-weight: bold;
        }

        .btn-daftar:hover {
            background: #3c6a8a;
        }

        .toggle-password {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #555;
        }
    </style>
</head>

<script>
function togglePassword(fieldId, icon) {
    const input = document.getElementById(fieldId);

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");
    } else {
        input.type = "password";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
    }
}
</script>

<body>

<script>
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm_password');
    const alertBox = document.getElementById('password-alert');

    function checkPassword() {
        if (confirmPassword.value === "") {
            alertBox.innerHTML = "";
            return;
        }

        if (password.value !== confirmPassword.value) {
            alertBox.innerHTML = `
                <div class="alert alert-danger p-2">
                    Password tidak sama!
                </div>
            `;
        } else {
            alertBox.innerHTML = `
                <div class="alert alert-success p-2">
                    Password cocok ✔
                </div>
            `;
        }
    }

    password.addEventListener('keyup', checkPassword);
    confirmPassword.addEventListener('keyup', checkPassword);
</script>

<div class="register-container">
    <div class="register-box">

        <!-- LEFT -->
        <div class="register-left">

            <a href="{{ route('login') }}" class="mb-3 back">
                <i class="bi bi-arrow-left"></i>
            </a>

            <!-- NOTIF -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nama -->
                <div class="form-group">
                    <i class="bi bi-person input-icon"></i>
                    <input type="text" name="name" class="form-control" placeholder="Masukan Nama Anda">
                </div>

                <!-- Email -->
                <div class="form-group">
                    <i class="bi bi-envelope input-icon"></i>
                    <input type="email" name="email" class="form-control" placeholder="Masukan Email Sekolah Anda">
                </div>

            <!-- Password -->
            <div class="form-group">
                <i class="bi bi-lock input-icon"></i>

                <input 
                    type="password" 
                    id="password"
                    name="password" 
                    class="form-control"
                    placeholder="Masukan kata sandi"
                >

                <!-- ICON MATA -->
                <i class="bi bi-eye-slash toggle-password" onclick="togglePassword('password', this)"></i>
            </div>

            <!-- Konfirmasi Password -->
            <div class="form-group">
                <i class="bi bi-lock input-icon"></i>

                <input 
                    type="password" 
                    id="password_confirmation"
                    name="password_confirmation" 
                    class="form-control"
                    placeholder="Konfirmasi kata sandi"
                >

                    <!-- ICON MATA -->
                    <i class="bi bi-eye-slash toggle-password" onclick="togglePassword('password_confirmation', this)"></i>
                </div>
                <button class="btn btn-daftar w-100 mt-3">
                    Daftar
                </button>

            </form>

        </div>

        <!-- RIGHT -->
        <div class="register-right d-none d-md-block"></div>

    </div>
</div>

</body>
</html>