<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table = 'marca';
    protected $primaryKey = 'idMarca';
    public $timestamps = 'true';
}
