<?php

namespace Database\Factories;

use App\Models\Ciudad;
use App\Models\Direccion;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Direccion>
 */
class DireccionFactory extends Factory
{
    protected $model = Direccion::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_usuario' => Usuario::inRandomOrder()->first()->id, // Selecciona un id_usuario existente
            'ciudad_id' => Ciudad::inRandomOrder()->first()->id,  // Selecciona un ciudad_id existente
            'calle_nombre' => $this->faker->streetName,
        ];
    }
}
