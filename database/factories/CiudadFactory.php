<?php

namespace Database\Factories;

use App\Models\Ciudad;
use App\Models\Provincia; // Asegúrate de importar el modelo Provincia
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ciudad>
 */
class CiudadFactory extends Factory
{
    protected $model = Ciudad::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ciudad_nombre' => $this->faker->city, // Genera un nombre de ciudad ficticio
            'provincia_id' => Provincia::inRandomOrder()->first()->id,
        ];
    }
}
