<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReportController;

// ===============================
// 👨‍🍳 Halaman utama / Form Reservasi
// ===============================

// form reservasi bisa diakses oleh siapa pun (tidak perlu login)
Route::get('/', [ReservasiController::class, 'create'])->name('reservasi.create');
Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');

// ===============================
// 🔒 Halaman yang butuh login (via Breeze)
// ===============================

// Dashboard (bisa diakses setelah login & email verified)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group route untuk user yang login
Route::middleware('auth')->group(function () {
    // Profile bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Laporan reservasi bulanan (hanya login user)
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
});

// Auth routes bawaan Breeze (login, register, forgot password, dll)
require __DIR__.'/auth.php';
