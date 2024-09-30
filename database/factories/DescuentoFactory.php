<?php

namespace Database\Factories;

use App\Models\Descuento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Descuento>
 */
class DescuentoFactory extends Factory
{
    protected $model = Descuento::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descuento_porcentaje' => $this->faker->numberBetween(5, 50), // Genera un porcentaje de descuento entre 5 y 50
        ];
    }
}
