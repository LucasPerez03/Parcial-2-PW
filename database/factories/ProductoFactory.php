<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nombre' => fake()->words(3, true), 
        'descripcion' => fake()->sentence(),
        // Genera precios entre 5000 y 25000
        'precio' => fake()->randomFloat(2, 8000, 25000), 
        // Elige una categoría al azar 
        'categoria' => fake()->randomElement(['entrada', 'principal', 'postre', 'bebida'])
        ];
    }
}
