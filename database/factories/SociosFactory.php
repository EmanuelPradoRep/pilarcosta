<?php

namespace Database\Factories;
use App\Models\User; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Socios>
 */
class SociosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      return [
            'usuario_id' => User::factory(),   // crea un User y usa su id
            'numero_socio' => $this->faker->unique()->numberBetween(1000, 9999),
            'documento' => $this->faker->unique()->numerify('########'),
            'sexo' => $this->faker->randomElement(['M','F']),
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'telefono' => $this->faker->phoneNumber,
            'direccion' => $this->faker->address,
            'fecha_ingreso' => $this->faker->date(),
            'fecha_nacimiento' => $this->faker->dateTimeBetween('-70 years', '-18 years'),
            'activo' => $this->faker->boolean,
            'observaciones' => $this->faker->sentence,
        ];

    }
}
