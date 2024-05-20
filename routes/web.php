<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PedidoController;

Route::view('/', 'inicio')->name('inicio');

Route::view('login', 'inicio')->name('login');

Route::view('/register', 'inicio')->name('register');

Route::get('/admin', [ComicController::class, 'admin'])->name('admin');

Route::delete('admin/comics/{id}', [ComicController::class, 'eliminar'])->name('eliminarComic');
Route::post('admin/comics/add', [ComicController::class, 'crear'])->name('crearComic');
Route::view('admin/comics', 'addproducto')->name('addproducto');

Route::middleware(['web'])->group(function () {
    Route::get('comics', [ComicController::class, 'index'])->name('comics');
    Route::get('producto/{id}', [ComicController::class, 'show'])->name('producto');
});

Route::middleware('auth')->group(function () {
    Route::post('comics/{id}/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('cart', [CartController::class, 'verCarrito'])->name('verCarrito');
    Route::delete('cart/{idProducto}', [CartController::class, 'eliminarDelCarrito'])->name('eliminarDelCarrito');
    Route::patch('cart/{idProducto}/update-quantity', [CartController::class, 'actualizarCantidad'])->name('actualizarCantidad');
    Route::post('/realizar-pedido', [CartController::class, 'realizarPedido'])->name('realizarPedido');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('admin/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
    Route::patch('admin/pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
    Route::delete('admin/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
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

