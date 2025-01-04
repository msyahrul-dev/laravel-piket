<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Halaman utama (welcome page)
Route::get('/', function () {
    return view('welcome');
});

// ---------------------------------------------
// Route untuk login
// ---------------------------------------------

// Menampilkan halaman login
Route::get('/logn', [SessionController::class, 'index'])->name('logn');

// Memproses login
Route::post('/logn', [SessionController::class, 'logn'])->name('logn.post');

// ---------------------------------------------
// Route untuk admin (dengan middleware 'auth', 'verified', dan 'role:admin')
// ---------------------------------------------
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    // Halaman dashboard admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Kelola jadwal
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
    Route::resource('jadwal', JadwalController::class);

    // Kelola laporan (list & hapus laporan)
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::delete('/laporan/{laporan}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
});

// ---------------------------------------------
// Route untuk petugas (dengan middleware 'auth', 'verified', dan 'role:petugas')
// ---------------------------------------------
Route::middleware(['auth', 'verified', 'role:petugas'])->group(function () {
    // Halaman dashboard petugas
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');

    // Tambah laporan
    Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
});

// ---------------------------------------------
// Route tambahan untuk otentikasi
// ---------------------------------------------
require __DIR__ . '/auth.php';
