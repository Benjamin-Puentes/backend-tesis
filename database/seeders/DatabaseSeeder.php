<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Compra;
use App\Models\Almacen;
use App\Models\Herramienta;
use App\Models\HerramientaSolicitud;
use App\Models\Region;
use App\Models\Ventas;
use App\Models\EstadoVenta;
use App\Models\MetodoDespacho;
use App\Models\MetodoPago;
use App\Models\VentaDiscoDuro;
use App\Models\Provincia;
use App\Models\SolicitudResiduos;
use App\Models\HerramientaEstado;
use App\Models\LoteResiduos;
use App\Models\DiscoDuro;
use App\Models\Ram;
use App\Models\Periferico;
use App\Models\TipoEntrada;
use App\Models\TipoPeriferico;
use App\Models\Direccion;
use App\Models\Ciudad;
use App\Models\VentaRam;
use App\Models\VentaPeriferico;
use App\Models\TamanoDiscoDuro;
use App\Models\Tamano;
use App\Models\TamanoRam;
use App\Models\TipoRam;
use App\Models\VelocidadRam;
use App\Models\Estado;
use App\Models\Disponibilidad;
use App\Models\Descuento;
use App\Models\Marca;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::factory(5)->create();
        Compra::factory(5)->create();
        Almacen::factory(5)->create();
        Herramienta::factory(5)->create();
        HerramientaSolicitud::factory(5)->create();
        Region::factory(5)->create();
        Ventas::factory(5)->create();
        EstadoVenta::factory(5)->create();
        MetodoDespacho::factory(5)->create();
        MetodoPago::factory(5)->create();
        VentaDiscoDuro::factory(5)->create();
        Provincia::factory(5)->create();
        SolicitudResiduos::factory(5)->create();
        HerramientaEstado::factory(5)->create();
        LoteResiduos::factory(5)->create();
        DiscoDuro::factory(5)->create();
        Ram::factory(5)->create();
        Periferico::factory(5)->create();
        TipoEntrada::factory(5)->create();
        TipoPeriferico::factory(5)->create();
        Direccion::factory(5)->create();
        Ciudad::factory(5)->create();
        VentaRam::factory(5)->create();
        VentaPeriferico::factory(5)->create();
        TamanoDiscoDuro::factory(5)->create();
        Tamano::factory(5)->create();
        TamanoRam::factory(5)->create();
        TipoRam::factory(5)->create();
        VelocidadRam::factory(5)->create();
        Estado::factory(5)->create();
        Disponibilidad::factory(5)->create();
        Descuento::factory(5)->create();
        Marca::factory(5)->create();
        
    }
}
