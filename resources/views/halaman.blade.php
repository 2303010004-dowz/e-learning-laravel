<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>E-Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: sans-serif;
        }

        .navbar-custom {
            background-color: #4f7ea3;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-custom .brand {
            color: white;
            font-weight: bold;
        }

        .navbar-custom a {
            color: white;
            text-decoration: none;
        }

        .hero {
            background-color: #fbfbfb;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            color: #227bbf;
            font-weight: bold;
            font-size: 36px;
        }

        .hero p {
            color: #666;
        }

        .scroll-btn {
            margin-top: 20px;
        }

        .section {
            text-align: center;
            padding: 80px 20px;
        }

        .section-gray {
            background-color: #f1f1f1;
            font-size: 25px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar-custom d-flex justify-content-between">
    <div class="brand">E-LEARNING</div>
</div>

<!-- HERO -->
<div class="hero">
    <h1>Platform<br>Perjalanan Belajarmu</h1>
    <p>belajar lebih mudah, lebih terarah</p>
</div>

<!-- SECTION DESKRIPSI -->
<div class="section section-gray">
<!-- SECTION FITUR -->
<div class="section">
    <h4 class="mb-5">Fitur Utama</h4>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-4 text-center h-100">
                    <h5>📚 Materi</h5>
                    <p>Akses materi kapan saja dan di mana saja</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-4 text-center h-100">
                    <h5>📝 Latihan</h5>
                    <p>Latihan soal interaktif untuk siswa</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-4 text-center h-100">
                    <h5>📊 Raport</h5>
                    <p>Pantau perkembangan nilai siswa</p>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<!-- SECTION FITUR -->
<div class="section">
    <h4>Fitur Utama</h4>
    <div class="row mt-4">
        <div class="col-md-4">
            <h5>📚 Materi</h5>
            <p>Akses materi kapan saja</p>
        </div>
        <div class="col-md-4">
            <h5>📝 Latihan</h5>
            <p>Latihan soal interaktif</p>
        </div>
        <div class="col-md-4">
            <h5>📊 Raport</h5>
            <p>Pantau perkembangan nilai</p>
        </div>
    </div>
</div>

<!-- SECTION FOOTER -->
<div class="section section-gray">
    <p>© 2026 E-Learning</p>
</div>

</body>
</html>