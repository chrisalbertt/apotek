<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [PageController::class, 'home']);
Route::get('/datauseradmin', [PageController::class, 'datauseradmin']);
Route::get('/pembelian', [PageController::class, 'pembelian']);
Route::get('/penjualan', [PageController::class, 'penjualan']);
Route::get('/kelolaobat', [PageController::class, 'kelolaobat']);
Route::get('/stokopname', [PageController::class, 'stokopname']);
Route::get('/laporan', [PageController::class, 'laporan']);
