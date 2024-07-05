<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::prefix('dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index']);

        //Kelurahan
        route::prefix('kelurahan')->group(function () {
            Route::get('/', [KelurahanController::class, 'index']);
            Route::get('/show/{id}', [KelurahanController::class, 'show']);
        });

        route::middleware('admin')->prefix('kelurahan')->group(function () {
            Route::get('/create', [KelurahanController::class, 'create']);
            Route::post('/store', [KelurahanController::class, 'store']);
            Route::get('/edit/{id}', [KelurahanController::class, 'edit']);
            Route::put('/update/{id}', [KelurahanController::class, 'update']);
            Route::delete('/destroy/{id}', [KelurahanController::class, 'destroy']);
        });

        //Pasien
        route::middleware('admin')->prefix('pasien')->group(function () {
            Route::get('/', [PasienController::class, 'index']);
            Route::get('/create', [PasienController::class, 'create']);
            Route::post('/store', [PasienController::class, 'store']);
            Route::get('/show/{id}', [PasienController::class, 'show']);
        });

        
    });
});


require __DIR__ . '/auth.php';

Route::get('/beranda', function () {
    return view('Halaman Beranda');
});

Route::get('/salam', function () {
    return view('Selamat Datang Hilmi di Laravel 11');
});


Route::get('/profile', function () {
    return view('Halaman Profile');
});



//Praktikum Laravel 2

//Route::get('/dashboard', [AdminController::class, 'index']);
//Route::get('/contact', [ContactController::class, 'index']);
//Route::get('/about', [AboutController::class, 'index']);}}

//Praktikum Laravel 3
//Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);
//Route::get('/dashboard/pasien', [PasienController::class, 'index']);


//Praktikum Laravel 4
//Route::get('/dashboard/kelurahan/create', [KelurahanController::class, 'create']);
//Route::post('/dashboard/kelurahan/store', [KelurahanController::class, 'store']);
//Route::get('/dashboard/kelurahan/show/{id}', [KelurahanController::class, 'show']);

//Route::get('/dashboard/pasien/create', [PasienController::class, 'create']);
//Route::post('/dashboard/pasien/store', [PasienController::class, 'store']);
//Route::get('/dashboard/pasien/show/{id}', [PasienController::class, 'show']);


//Praktikum Laravel 5
//Route::get('/dashboard/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
//Route::put('/dashboard/kelurahan/update/{id}', [KelurahanController::class, 'update']);
//Route::delete('/dashboard/kelurahan/destroy/{id}', [KelurahanController::class, 'destroy']);
