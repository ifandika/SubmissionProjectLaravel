<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Halo Programmer laravel";
});

Route::get('/ifandika', function () {
    return (
        "
        <h1></h1>
        "
    );
});

// Praktikum Pertemuan Ke-3

// Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
// Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
// Route::resource('produk', ProdukController::class);

// ========================

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

// Route::get('/products/{id}', function ($id) {
//     return 'Produk #' . $id;
// });