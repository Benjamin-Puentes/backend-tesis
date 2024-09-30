<?php

namespace Database\Factories;

use App\Models\EstadoVenta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EstadoVenta>
 */
class EstadoVentaFactory extends Factory
{
    protected $model = EstadoVenta::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estado_venta_nombre' => $this->faker->word, // Genera un nombre ficticio para el estado de venta
            'estado_venta_slug' => $this->faker->word
        ];
    }
}
