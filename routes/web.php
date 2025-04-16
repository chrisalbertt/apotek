<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController; // Tambahkan jika kamu pakai controller khusus login

// Halaman login sebagai default route saat buka web
Route::get('/', function () {
    return redirect('/login');
});

// Route GET untuk menampilkan halaman login
Route::get('/login', [PageController::class, 'login'])->name('login');

// Route POST untuk proses login
Route::post('/login', [PageController::class, 'prosesLogin']); // Tambahkan ini

// Rute lainnya (hanya bisa diakses setelah login jika nanti pakai middleware)
Route::get('/home', [PageController::class, 'home']);
Route::get('/datauseradmin', [PageController::class, 'datauseradmin']);
Route::get('/pembelian', [PageController::class, 'pembelian']);
Route::get('/penjualan', [PageController::class, 'penjualan']);
Route::get('/kelolaobat', [PageController::class, 'kelolaobat']);
Route::get('/stokopname', [PageController::class, 'stokopname']);
Route::get('/laporan', [PageController::class, 'laporan']);
Route::get('/logout', [PageController::class, 'logout']);
