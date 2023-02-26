<?php

use App\Http\Controllers\Controller;
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

Route::middleware(['web'])->group(function(){
    Route::get('/', [Controller::class, 'login'])->name('login');
    Route::post('/postlogin', [Controller::class, 'postlogin'])->name('postlogin');
    Route::get('/register', [Controller::class, 'register'])->name('register');
    Route::post('/postregister', [Controller::class, 'postregister'])->name('postregister');
    Route::get('/logout', [Controller::class, 'logout'])->name('logout');
});

Route::prefix('administrator')->name('administrator.')->group(function(){
    Route::middleware(['auth:web'])->group(function(){
        Route::get('/dashboard', function(){return view('back.pages.administrator.dashboard');})->name('dashboard');
    });
});

Route::prefix('petugas')->name('petugas.')->group(function(){
    Route::middleware(['auth:web'])->group(function(){
        Route::get('/dashboard', function(){return view('back.pages.petugas.dashboard');})->name('dashboard');
    });
});

Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['auth:web'])->group(function(){
        Route::get('/dashboard', function(){return view('back.pages.masyarakat.dashboard');})->name('dashboard');
    });
});