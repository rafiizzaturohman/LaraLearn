<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/barang', [BarangController::class, 'index'])->name('barang');

Route::get('/barang/createBarang', [BarangController::class, 'createView'])->name('createView');

Route::post('/barang/create', [BarangController::class, 'store'])->name('store');

Route::get('/barang/{id}/edit', [BarangController::class, 'editView'])->name('editView');

Route::put('/barang/{id}', [BarangController::class, 'update'])->name('update');

Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('destroy');