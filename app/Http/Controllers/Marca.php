<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mark;

class Marca extends Controller
{
    public function marcas(){
        $marcas = DB::table('marca')->get(); 
        return view('marcas.listado', ['mark'=>$marcas]);
    }
}
