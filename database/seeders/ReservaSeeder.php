<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reserva;
use App\Models\Producto;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtenemos todos los IDs de los productos que ya existen
    $productos = Producto::all();

    // Creamos 20 reservas
    Reserva::factory(20)->create()->each(function ($reserva) use ($productos) {
        // Le asignamos entre 1 y 3 productos al azar a cada reserva
        $reserva->productos()->attach(
            $productos->random(rand(1, 3))->pluck('id')->toArray()
        );
    });
    }
}
