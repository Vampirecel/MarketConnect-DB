<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LineasNegocioController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::get('/productos/nuevo', [ProductoController::class, 'create'])->name('productos.nuevo');
Route::post('/productos/guardar', [ProductoController::class, 'store'])->name('productos.guardar');
Route::post('/productos/editar/{id}', [ProductoController::class, 'edit'])-> name('productos.editar');
Route::delete('/productos/eliminar/{id}', [ProductoController::class, 'destroy'])-> name('productos.eliminar');

Route::get('/lineas_negocio', [LineasNegocioController::class, 'index'])->name('lineas_negocio');
Route::get('/lineas_negocio/nuevo', [LineasNegocioController::class, 'create'])->name('lineas_negocio.nuevo');
Route::post('/lineas_negocio/guardar', [LineasNegocioController::class, 'store'])->name('lineas_negocio.guardar');
Route::post('/lineas_negocio/editar/{id}', [LineasNegocioController::class, 'edit'])-> name('lineas_negocio.editar');
Route::delete('/lineas_negocio/eliminar/{id}', [LineasNegocioController::class, 'destroy'])-> name('lineas_negocio.eliminar');   