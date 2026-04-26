<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\HomeController;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/admin/produk', [ProductController::class, 'index'])->name('admin.produk');
Route::post('/produk/store', [ProductController::class, 'store'])->name('produk.store');
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');
Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');