<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/nastul-prado/articulos', function () {
    return view('articulos/listado');
});


//MARCAS
Route::get('/nastul-prado/marcas', function () {
    return view('marcas/listado');
});

//TIENDA
Route::get('/nastul-prado/presentacion', function () {
    return view('tienda/info');
});