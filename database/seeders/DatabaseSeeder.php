<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Compra;
use App\Models\Ventas;
use App\Models\EstadoVenta;
use App\Models\MetodoDespacho;
use App\Models\MetodoPago;
use App\Models\Provincia;
use App\Models\SolicitudResiduos;
use App\Models\Direccion;
use App\Models\Ciudad;
use App\Models\Disponibilidad;
use App\Models\Descuento;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::factory(5)->create();
        Compra::factory(5)->create();
        Ventas::factory(5)->create();
        EstadoVenta::factory(5)->create();
        MetodoDespacho::factory(5)->create();
        MetodoPago::factory(5)->create();
        Provincia::factory(5)->create();
        SolicitudResiduos::factory(5)->create();
        Direccion::factory(5)->create();
        Ciudad::factory(5)->create();
        Disponibilidad::factory(5)->create();
        Descuento::factory(5)->create();
        
    }
}
