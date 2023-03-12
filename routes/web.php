<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/tampilkan-semua-laporan', [Controller::class, 'tampilkan_semua_laporan'])->name('tampilkan-semua-laporan');

Route::middleware(['web'])->group(function(){
    Route::get('/login', [Controller::class, 'login'])->name('login');
    Route::post('/postlogin', [Controller::class, 'postlogin'])->name('postlogin');
    Route::middleware(['guest'])->group(function(){
    });
    Route::get('/register', [Controller::class, 'register'])->name('register');
    Route::post('/postregister', [Controller::class, 'postregister'])->name('postregister');
    Route::get('/logout', [Controller::class, 'logout'])->name('logout');
});

Route::prefix('administrator')->name('administrator.')->group(function(){
    Route::middleware(['auth:web', 'admin', 'disable_back_button'])->group(function(){
        Route::get('/dashboard', function(){return view('back.pages.administrator.dashboard');})->name('dashboard');
        Route::get('/semua', [TanggapanController::class, 'semua'])->name('semua');
        Route::get('/baru', [TanggapanController::class, 'baru'])->name('baru');
        Route::get('/diproses', [TanggapanController::class, 'laporan_yang_sedang_diproses'])->name('diproses');
        Route::get('/selesai', [TanggapanController::class, 'selesai'])->name('selesai');
        Route::get('/tanggapan/{id}', [TanggapanController::class, 'tanggapan'])->name('tanggapan');
        Route::put('/simpan-tanggapan/{id}', [TanggapanController::class, 'simpan_tanggapan'])->name('simpan-tanggapan');

        Route::get('/cetak-laporan-pengaduan', [TanggapanController::class, 'cetak_laporan_pengaduan'])->name('cetak-laporan-pengaduan');
        Route::get('/cetak-banyak-petugas', [PetugasController::class, 'cetak_banyak_petugas'])->name('cetak-banyak-petugas');
        
        Route::get('/petugas', [PetugasController::class, 'petugas'])->name('petugas');
        Route::post('/postpetugas', [PetugasController::class, 'postpetugas'])->name('postpetugas');
        Route::get('/petugas/{id}', [PetugasController::class, 'ubah'])->name('ubah');
        Route::put('/simpan-perubahan-petugas/{id}', [PetugasController::class, 'simpan_perubahan_petugas'])->name('simpan-perubahan-petugas');
        Route::put('/hapus-petugas/{id}', [PetugasController::class, 'hapus_petugas'])->name('hapus-petugas');
    });
});

Route::prefix('petugas')->name('petugas.')->group(function(){
    Route::middleware(['auth:web', 'petugas', 'disable_back_button'])->group(function(){
        Route::get('/dashboard', function(){return view('back.pages.petugas.dashboard');})->name('dashboard');
        Route::get('/cetak-laporan-pengaduan', [TanggapanController::class, 'cetak_laporan_pengaduan'])->name('cetak-laporan-pengaduan');
    });
});

Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['auth:web', 'user', 'disable_back_button'])->group(function(){
        Route::get('/hanya-pengaduan-mu', [PengaduanController::class, 'hanya_pengaduan_mu'])->name('hanya-pengaduan-mu');
        Route::get('/semua', [PengaduanController::class, 'semua'])->name('semua');
        Route::get('/pengaduan/{id}', [PengaduanController::class, 'pengaduan'])->name('pengaduan');
        Route::get('/create', [PengaduanController::class, 'create'])->name('create');
        Route::post('/store', [PengaduanController::class, 'store'])->name('store');
        Route::put('/simpan-perubahan/{id}', [PengaduanController::class, 'simpan_perubahan'])->name('simpan-perubahan');
        Route::put('/hapus-pengaduan/{id}', [PengaduanController::class, 'hapus_pengaduan'])->name('hapus-pengaduan');
    });
});