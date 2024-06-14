<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/tambah', [KategoriController::class, 'create']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);
Route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);
Route::get('/kategori/show/{id}', [KategoriController::class, 'show']);
Route::get('/kategori/report', [KategoriController::class, 'generateReport']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/pengaduan', [PengaduanController::class, 'index']);
Route::get('/pengaduan/tambah', [PengaduanController::class, 'create']);
Route::post('/pengaduan/store', [PengaduanController::class, 'store']);
Route::get('/pengaduan/edit/{id_pengaduan}', [PengaduanController::class, 'edit']);
Route::put('/pengaduan/update/{id_pengaduan}', [PengaduanController::class, 'update']);
Route::get('/pengaduan/show/{id_pengaduan}', [PengaduanController::class, 'show']);
Route::get('/pengaduan/delete/{id_pengaduan}', [PengaduanController::class, 'delete']);
Route::delete('/pengaduan/destroy/{id_pengaduan}', [PengaduanController::class, 'destroy']);
Route::get('/pengaduan/report', [PengaduanController::class, 'generateReport']);





