<?php

namespace Database\Factories;

use App\Models\Ventas;
use App\Models\Cable;
use App\Models\Ram;
use App\Models\Periferico;
use App\Models\Disco_Duro;
use App\Models\MetodoPago;
use App\Models\MetodoDespacho;
use App\Models\EstadoVenta;
use App\Models\Usuario;
use App\Models\Documentos;
use App\Models\Direccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentasFactory extends Factory
{
    protected $model = Ventas::class;

    public function definition(): array
    {
        return [
            'venta_email' => $this->faker->unique()->safeEmail,
            'estado_venta_id' => EstadoVenta::inRandomOrder()->first()->id,
            'direccion_id' => Direccion::inRandomOrder()->first()->id,
            'metodo_pago_id' => MetodoPago::inRandomOrder()->first()->id,
            'metodo_despacho_id' => MetodoDespacho::inRandomOrder()->first()->id,
            'id_usuario' => Usuario::inRandomOrder()->first()->id,
            'id_documentos' => Documentos::inRandomOrder()->first()->id
        ];
    }
}
