<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud_recepcion extends Model
{
    protected $table='solicitud_recepcion';
    protected $fillable = ['solicitud_recepcion_volumen_aproximado',
        'solicitud_recepcion_peso_aproximado',
        'solicitud_recepcion_peso_calculado',
        'solicitud_recepcion_volumen_calculado',
        'solicitud_recepcion_codigo',
        'solicitud_recepcion_descripcion',
        'metodo_despacho_id',
        'id_usuario'];
    use HasFactory;
}
