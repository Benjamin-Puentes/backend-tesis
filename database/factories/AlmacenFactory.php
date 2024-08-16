<?php

namespace Database\Factories;

use App\Models\Almacen;
use App\Models\Direccion;
use App\Models\Ciudad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Almacen>
 */
class AlmacenFactory extends Factory
{
    protected $model = Almacen::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'direccion_id' => Direccion::inRandomOrder()->first()->id, // Asegúrate de que Direccion tenga datos
            'ciudad_id' => Ciudad::inRandomOrder()->first()->id, // Asegúrate de que Ciudad tenga datos
            'calle_nombre' => $this->faker->streetName,
        ];
    }
}
