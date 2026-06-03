<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>EduLearn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

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
            padding: 15px 20px;
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
            padding: 90px 20px;
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
            padding: 40px 20px;
        }

        .section-gray {
            background-color: #f1f1f1;
            font-size: 25px;
        }
        .section p{
            font-size: 35px;
        }
        .card{
            border-radius: 25px;       
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar-custom d-flex justify-content-between">
    <div class="brand">
    <i class="bi bi-x-diamond"></i> EduLearn
</div>
    <div class="btn-primary"><a href="{{ route('login')}}">Masuk</a></div>
</div>

<!-- HERO -->
<div class="hero">
    <h1>Platform<br>Perjalanan Belajarmu</h1>
    <p>Belajar lebih mudah, Raih Prestasi</p>
</div>

<!-- SECTION DESKRIPSI -->
<div class="section section-gray">
<!-- SECTION FITUR -->
<div class="section">
    <h4 class="mb-5">Fitur Utama</h4>
    <p>Dirancang Khusus Untuk Kebutuhan Belajar Siswa</p></p>
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-4 text-center h-100">
                    <h5><i class="bi bi-backpack4" style="font-size: 30px"></i></h5>
                    <p class="fw-semibold">Kelas per mata pelajaran</p>
                    <p class="fw-normal">Setiap guru membuat kelas digital untuk mata pelajarannya. Siswa bergabung dengan kode kelas</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-4 text-center h-100">
                    <h5><i class="bi bi-list" style="font-size: 35px;"></i></h5>
                    <p class="fw-semibold">Materi modul & digital</p>
                    <p class="fw-normal">Guru menggungah modul,slide,pembelajaran. Dapat diakses siswa kapan saja</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-4 text-center h-100">
                    <h5><i class="bi bi-clipboard" style="font-size: 35px"></i></h5>
                    <p class="fw-semibold">Tugas & Penilaian Online</p>
                    <p class="fw-normal">Pengumpulan tugas dan penilaian dilakukan langsung di platform. Nilai terekam otomatis</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-4 text-center h-100">
                    <h5><i class="bi bi-calendar-event" style="font-size: 35px"></i></h5>
                    <p class="fw-semibold">Forum diskusi siswa</p>
                    <p class="fw-normal">Siswa dan guru berdiskusi dalam forum kelas. Interaksi tetap berlangsung meski belajar dirumah</p>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<!-- SECTION FITUR1 -->
<div class="section">
    <h4>FITUR PLATFORM</h4>
    <p>Cara Bergabung Platform</p>
    <div class="row mt-4">
        <div class="col-md-4">
            <h6><i class="bi bi-1-circle-fill" style="font-size: 80px"></i></h6>
            <p class="fw-semibold">Daftar Dengan Email Sekolah</p>
            <p class="fw-normal">Gunakan email/NIS resmi sekolah (@sman3tasik.sch.id) untuk membuat akun</p>
        </div>
        <div class="col-md-4">
            <h7><i class="bi bi-2-circle-fill" style="font-size: 80px"></i></h7>
            <p class="fw-semibold">Peran</p>
            <p class="fw-normal">Guru membuat kelas dan menggungah materi. Siswa join dengan kode kelas dari guru</p>
        </div>
        <div class="col-md-4">
            <h8><i class="bi bi-3-circle-fill" style="font-size: 80px"></i></h8>
            <p class="fw-semibold">Mulai Belajar</p>
            <p class="fw-normal">Akses materi, kerjakan tugas, dan diskusi langsung di platform</p>
        </div>
    </div>
</div>

<!-- SECTION FOOTER -->
<div class="section text-white" style="background-color: #4f7ea3;">
    <div class="container">
        <p>Sudah punya akun?</p>
        <h5>Masuk sekarang dan lanjutkan pembelajaran kamu</h5>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('login') }}" class="px-8 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-blue-600 transition">
                Masuk
            </a>
            <a href="{{ route('register') }}" class="px-8 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-blue-600 transition">
                Daftar
            </a>
        </div>
    </div>
</div>
</body>
</html>