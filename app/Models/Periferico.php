<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periferico extends Model
{
    use HasFactory;

    protected $table = 'periferico';
    protected $primaryKey = 'periferico_id';

    protected $fillable = [
        'almacen_id',
        'estado_id',
        'marca_id',
        'disponibilidad_id',
        'descuento_id',
        'tipo_periferico_id',
        'solicitud_residuos_id',
        'periferico_precio',
        'periferico_nombre',
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

    public function tipoPeriferico()
    {
        return $this->belongsTo(TipoPeriferico::class, 'tipo_periferico_id');
    }

    public function solicitudResiduos()
    {
        return $this->belongsTo(SolicitudResiduos::class, 'solicitud_residuos_id');
    }
}
