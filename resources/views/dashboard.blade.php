@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<h3>Selamat Datang 👋</h3>
<p>Ini adalah dashboard siswa</p>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Nilai Rata-rata</h5>
            <h3>85</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Pelajaran</h5>
            <h3>10</h3>
        </div>
    </div>

</div>
@endsection