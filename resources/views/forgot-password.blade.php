<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lupa Kata Sandi - EduLearn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
            font-family: sans-serif;
        }

        .container-box {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box {
            width: 900px;
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            display: flex;
            gap: 40px;
        }

        .left {
            flex: 1;
        }

        .right {
            flex: 1;
            background: #ddd;
            border-radius: 20px;
        }

        .back {
            margin-bottom: 20px;
            display: inline-block;
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

        .btn-main {
            background: #4f7ea3;
            border-radius: 50px;
            height: 50px;
            color: white;
            font-weight: bold;
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
<body>

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

<div class="container-box">
    <div class="box">

        <!-- LEFT -->
        <div class="left">

            <a href="{{ route('login') }}" class="back">
                ← Ubah kata sandi
            </a>

            <!-- NOTIF -->
            @if (session('status'))
                <div class="alert alert-success">
                    Link reset password telah dikirim ke email Anda.
                </div>
            @endif

            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <form method="POST" action="{{ route("forgot-password") }}">
                @csrf

                <!-- Email -->
                <div class="form-group">
                    
                    <i class="bi bi-envelope input-icon"></i>

                    <input 
                        type="email" 
                        name="email" 
                        class="form-control" 
                        placeholder="Masukan Email Anda"
                        required
                    >
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

                <!-- Button -->
                <button class="btn btn-main w-100 mt-3">
                    Kirim Link Reset
                </button>

            </form>

        </div>

        <!-- RIGHT -->
        <div class="right d-none d-md-block"></div>

    </div>
</div>

</body>
</html>