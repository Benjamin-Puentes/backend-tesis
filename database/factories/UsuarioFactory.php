<?php

namespace Database\Factories;

use App\Models\Usuario;
use App\Models\Direccion;
use App\Models\Ciudad;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'usuario_correo' => $this->faker->unique()->safeEmail,
            'usuario_nombre' => $this->faker->name,
            'usuario_privilegios' => false,
            'password' => bcrypt('password'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Usuario $usuario) {
            // Crear una dirección asociada al usuario recién creado
            Direccion::factory()->create([
                'id_usuario' => $usuario->id,
                'ciudad_id' => Ciudad::inRandomOrder()->first()->id,
            ]);
        });
    }
}
