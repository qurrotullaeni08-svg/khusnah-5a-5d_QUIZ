<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BukuController;

Route::get('/halo', [InfoController::class, 'halo']);
Route::get('/dosen', [InfoController::class, 'dosen']);
Route::get('/mahasiswa/{nama}/{nim}', [InfoController::class, 'detailMahasiswa']);
Route::get('/ikmi', [InfoController::class, 'kampus']);
Route::resource('/produk', ProdukController::class);
Route::resource('/koleksi', BukuController::class);
