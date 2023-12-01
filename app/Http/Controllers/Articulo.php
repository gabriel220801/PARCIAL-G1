<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Articulo extends Controller
{
   public function index(){
   return view('articulos.listado');
   } 
}
