<?php

use App\Models\Usuario;
use App\Models\Direccion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'correo' => $this->faker->unique()->safeEmail,
            'nombre' => $this->faker->name,
            'direccion_id' => Direccion::factory(),
            'privilegios' => json_encode($this->faker->words(3)),
        ];
    }
}

