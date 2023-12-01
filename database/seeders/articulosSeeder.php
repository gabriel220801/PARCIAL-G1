<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class articulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articulo')->insert([
            [
                'referencia' => 'ZAP1',
                'nombre' => 'Zapatos Deportivos',
                'descripcion' => 'Zapatos cómodos para hacer deporte.',
                'color' => 'Varios',
                'precioUnitario' => 59.99,
                'observacion' => 'Tallas disponibles: 38-45',
                'foto' => 'img/nike2.jpg',
                'marca' => '1',
            ],
            [
                'referencia' => 'ROP1',
                'nombre' => 'Buso Deportivo',
                'descripcion' => 'Buso deportivo para hombres.',
                'color' => 'Negro',
                'precioUnitario' => 29.99,
                'observacion' => 'Disponible en tallas S, M, L',
                'foto' => 'img/buso.jpg',
                'marca' => '1',
            ],
            [
                'referencia' => 'ACC1',
                'nombre' => 'Botas puma',
                'descripcion' => 'Botas Puma para Hombres',
                'color' => 'Negro',
                'precioUnitario' => 89.99,
                'observacion' => 'Super Resistentes',
                'foto' => 'img/botaspuma.jpg',
                'marca' => '3',
            ],
            [
                'referencia' => 'ZAP2',
                'nombre' => 'Gorra Rebook',
                'descripcion' => 'super linda',
                'color' => 'Blanca',
                'precioUnitario' => 79.99,
                'observacion' => 'Ideales para climas calidos.',
                'foto' => 'img/gorrarebook.jpg',
                'marca' => '4',
            ],
            [
                'referencia' => 'ROP2',
                'nombre' => 'Guantes Adidas',
                'descripcion' => 'Guantes para el Gimnasio',
                'color' => 'Negro',
                'precioUnitario' => 119.99,
                'observacion' => 'Con detalles.',
                'foto' => 'img/guantesadidas.jpg',
                'marca' => '2',
            ],
        ]);
    }
}
