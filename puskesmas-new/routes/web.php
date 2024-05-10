<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('Halaman Beranda');
});

Route::get('/salam', function () {
    return view('Selamat Datang Hilmi di Laravel 11');
});


Route::get('/profile', function () {
    return view('Halaman Profile');
});
