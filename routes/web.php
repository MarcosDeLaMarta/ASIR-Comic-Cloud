<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::view('/', 'inicio')->name('inicio');
Route::get('comics', [ComicController::class, 'index'])->name('comics');
Route::view('/carrito', 'inicio')->name('verCarrito');
Route::view('/logout', 'inicio')->name('cerrarSesion');
Route::view('/login', 'inicio')->name('login');
Route::view('añadir', 'inicio')->name('addToCart');
Route::view('detalles', 'inicio')->name('verDetalleProducto');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
