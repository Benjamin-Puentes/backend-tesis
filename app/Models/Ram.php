<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;

    protected $table = 'ram';
    protected $primaryKey = 'ram_id';

    protected $fillable = [
        'almacen_id',
        'estado_id',
        'marca_id',
        'disponibilidad_id',
        'descuento_id',
        'tamano_ram_id',
        'tipo_ram_id',
        'solicitud_residuos_id',
        'velocidad_ram_id',
        'ram_modelo_nombre',
        'ram_precio',
    ];

    // Relaciones
    public function almacen()
    {
        return $this->belongsTo(Almacen::class, 'almacen_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function disponibilidad()
    {
        return $this->belongsTo(Disponibilidad::class, 'disponibilidad_id');
    }

    public function descuento()
    {
        return $this->belongsTo(Descuento::class, 'descuento_id');
    }

    public function tamanoRam()
    {
        return $this->belongsTo(TamanoRam::class, 'tamano_ram_id');
    }

    public function tipoRam()
    {
        return $this->belongsTo(TipoRam::class, 'tipo_ram_id');
    }

    public function velocidadRam()
    {
        return $this->belongsTo(Velocidad_Ram::class, 'velocidad_ram_id');
    }

    public function solicitudResiduos()
    {
        return $this->belongsTo(SolicitudResiduos::class, 'solicitud_residuos_id');
    }
}
