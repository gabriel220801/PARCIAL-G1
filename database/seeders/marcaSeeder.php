<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class marcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marca')->insert([
            [
                'idMarca' => '1',
                'descripcion' => 'Nike.'
            ],
            [
                'idMarca' => '2',
                'descripcion' => 'Adidas'
            ],
            [
                'idMarca' => '3',
                'descripcion' => 'Puma'
            ],
            [
                'idMarca' => '4',
                'descripcion' => 'Rebook'
            ],
        ]);
    }
}
