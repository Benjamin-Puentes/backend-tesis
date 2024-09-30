<?php

namespace Database\Factories;

use App\Models\MetodoDespacho;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MetodoDespacho>
 */
class MetodoDespachoFactory extends Factory
{
    protected $model = MetodoDespacho::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'metodo_despacho_nombre' => $this->faker->word, // Genera un nombre ficticio para el método de despacho
            'metodo_despacho_slug' => $this->faker->word
        ];
    }
}
