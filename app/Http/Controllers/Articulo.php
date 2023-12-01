<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class Articulo extends Controller
{
   public function index(){
      $articulos = DB::table('articulo')
                  ->join('marca','marca','=','idMarca')->get();
      return view('articulos.listado', ['article'=>$articulos]);
  }
}
