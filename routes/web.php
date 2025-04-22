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

Route::get('/barang/create', [BarangController::class, 'createView'])->name('store');

Route::get('/barang/edit', [BarangController::class, 'editView'])->name('update');