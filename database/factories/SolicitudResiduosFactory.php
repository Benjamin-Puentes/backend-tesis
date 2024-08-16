<?php

namespace Database\Factories;

use App\Models\SolicitudResiduos;
use App\Models\Usuario;
use App\Models\TipoSolicitudResiduos;
use App\Models\Documentos;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolicitudResiduosFactory extends Factory
{
    protected $model = SolicitudResiduos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_usuario' => Usuario::inRandomOrder()->first()->id,
            'tipo_solicitud_residuos_id' => TipoSolicitudResiduos::inRandomOrder()->first()->id,
            'volumen_aproximado' => $this->faker->randomFloat(2, 0, 100),
            'peso_aproximado' => $this->faker->randomFloat(2, 0, 100),
            'volumen_real' => $this->faker->randomFloat(2, 0, 100),
            'peso_real' => $this->faker->randomFloat(2, 0, 100),
            'id_documentos' => Documentos::inRandomOrder()->first()->id,
        ];
    }
}
