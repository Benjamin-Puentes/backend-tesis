<?php

namespace Database\Factories;

use App\Models\Documentos; // Asegúrate de que el modelo sea correcto
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documentos>
 */
class DocumentosFactory extends Factory
{
    protected $model = Documentos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doc_tipo' => $this->faker->word, 
            'doc_descripcion' => $this->faker->sentence,
            'doc_fecha' => $this->faker->date,
            'doc_monto' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
