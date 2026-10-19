<?php

namespace Database\Factories;

use App\Models\Reserva;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nombre_cliente' => fake()->name(),
        'email' => fake()->unique()->safeEmail(),
        'telefono' => fake()->phoneNumber(),
        // Fechas entre hoy y dentro de un mes
        'fecha' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
        // Horarios de cena
        'hora' => fake()->time('H:i', '23:00'),
        // Entre 1 y 10 personas, como pide el requisito
        'cantidad_personas' => fake()->numberBetween(1, 10),
        'observaciones' => fake()->optional()->sentence(),
        ];
    }
}
