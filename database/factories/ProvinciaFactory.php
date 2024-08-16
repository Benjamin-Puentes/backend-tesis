<?php

namespace Database\Factories;

use App\Models\Provincia;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provincia>
 */
class ProvinciaFactory extends Factory
{
    protected $model = Provincia::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'provincia_nombre' => $this->faker->word, // Genera un nombre ficticio para la provincia
            'region_id' => Region::inRandomOrder()->first()->id, // Selecciona aleatoriamente un ID de región existente
        ];
    }
}
