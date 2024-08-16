<?php

namespace Database\Factories;

use App\Models\TipoSolicitudResiduos;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoSolicitudResiduosFactory extends Factory
{
    protected $model = TipoSolicitudResiduos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_solicitud_residuos_nombre' => $this->faker->word, // Genera un nombre ficticio
        ];
    }
}
