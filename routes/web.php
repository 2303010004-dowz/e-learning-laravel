<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('halaman');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/siswa', function () {
        return view('siswa.index');
    });

    Route::get('/nilai', function () {
        return "<h2>Halaman Nilai</h2>";
    });

    Route::get('/raport', function () {
        return "<h2>Halaman Raport</h2>";
    });

});