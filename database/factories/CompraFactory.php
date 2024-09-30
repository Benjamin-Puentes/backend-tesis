<?php

namespace Database\Factories;

use App\Models\Compra;
use App\Models\Documentos; // Asegúrate de importar el modelo Documentos
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compra>
 */
class CompraFactory extends Factory
{
    protected $model = Compra::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'detalles' => $this->faker->text(100), // Genera detalles de compra ficticios
            'compra_fecha' => $this->faker->date, // Genera una fecha de compra ficticia
            'id_documentos' => Documentos::inRandomOrder()->first()->id, // Selecciona un ID de documento existente aleatoriamente
        ];
    }
}
