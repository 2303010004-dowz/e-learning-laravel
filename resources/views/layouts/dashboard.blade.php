<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #4f7ea3;
            color: white;
            position: fixed;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 15px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #3b6e8f;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar-top {
            background: #f8f9fa;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-center py-3">EduLearn</h4>

    <a href="/dashboard">🏠 Dashboard</a>
    <a href="/siswa">👨‍🎓 Data Siswa</a>
    <a href="/nilai">📊 Nilai</a>
    <a href="/raport">📄 Raport</a>

    <form action="/logout" method="POST" class="px-3 mt-3">
        @csrf
        <button class="btn btn-light w-100">Logout</button>
    </form>
</div>

<!-- CONTENT -->
<div class="content">

    <!-- NAVBAR ATAS -->
    <div class="navbar-top d-flex justify-content-between">
        <div>Dashboard Siswa</div>
        <div>{{ Auth::user()->name }}</div>
    </div>

    <!-- ISI -->
    <div class="mt-4">
        @yield('content')
    </div>

</div>

</body>
</html>