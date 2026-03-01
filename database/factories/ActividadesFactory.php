<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actividades>
 */
class ActividadesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(3),          // título corto
            'descripcion' => $this->faker->sentence(10),      // texto largo
            'fecha_hora' => $this->faker->dateTimeBetween('now', '+1 year'),
            'lugar' => $this->faker->city,                  // ciudad/lugar
            'cupo_maximo' => $this->faker->numberBetween(10, 100),
            'duracion_minutos' => $this->faker->numberBetween(30, 180),
            'costo' => $this->faker->randomFloat(2, 0, 500),
            'usuario' => $this->faker->name,                // organizador ficticio
            'activo' => $this->faker->boolean(80),          // 80% probabilidad de estar activo

        ];
    }
}
