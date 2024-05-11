<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\CartController;

Route::view('/', 'inicio')->name('inicio');

Route::view('login', 'inicio')->name('login');

Route::view('/register', 'inicio')->name('register');



Route::middleware(['web'])->group(function () {
    Route::get('comics', [ComicController::class, 'index'])->name('comics');
    Route::get('producto/{id}', [ComicController::class, 'show'])->name('producto');
    Route::post('comics/{id}/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('cart', [CartController::class, 'verCarrito'])->name('verCarrito');
    Route::delete('cart/{idProducto}', [CartController::class, 'eliminarDelCarrito'])->name('eliminarDelCarrito');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
