<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Articulo;
use App\Http\Controllers\Marca;
use App\Http\Controllers\Tienda;

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

Route::get('/', function () {
    return view('index');
});

//ARTICULOS


Route::get('/nastul-prado/articulos', [Articulo::class, 'index'])
->name('listado_articulos');



//MARCAS

Route::get('/nastul-prado/marcas', [Marca::class, 'marcas'])
->name('listado_marcas');

//TIENDA


Route::get('/nastul-prado/presentacion', [Tienda::class, 'tienda'])
->name('info_tienda');