<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Halaman user
Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/donasi', [DonasiController::class, 'form'])->name('donasi.form');
Route::post('/donasi', [DonasiController::class, 'submit'])->name('donasi.submit');
Route::get('/tentang-kami', [PageController::class, 'tentang'])->name('tentang');
Route::get('/pelaporan', [PelaporanController::class, 'form'])->name('pelaporan.form');
Route::post('/pelaporan', [PelaporanController::class, 'submit'])->name('pelaporan.submit');

// Halaman login admin
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman admin (tanpa middleware)
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/donasi', [DonasiController::class, 'index'])->name('admin.donasi');
Route::get('/admin/pelaporan', [PelaporanController::class, 'index'])->name('admin.pelaporan');
