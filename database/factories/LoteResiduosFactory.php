<?php

namespace Database\Factories;

use App\Models\LoteResiduos;
use App\Models\SolicitudResiduos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoteResiduos>
 */
class LoteResiduosFactory extends Factory
{
    protected $model = LoteResiduos::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'solicitud_residuos_id' => SolicitudResiduos::inRandomOrder()->first()->id, // Asegúrate de que SolicitudResiduos tenga datos
        ];
    }
}
