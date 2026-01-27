<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos');

Route::get('/productos/nuevo', [ProductoController::class, 'create'])->name('productos.nuevo');

Route::post('/productos/guardar', [ProductoController::class, 'store'])->name('productos.guardar');

Route::post('/productos/editar/{id}', [ProductoController::class, 'edit'])-> name('productos.editar');

Route::post('/productos/eliminar/{id}', [ProductoController::class, 'destroy'])-> name('productos.eliminar');