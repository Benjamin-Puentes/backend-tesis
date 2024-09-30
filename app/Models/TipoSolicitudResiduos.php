<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSolicitudResiduos extends Model
{
    use HasFactory;

    protected $table = 'tipo_solicitud_residuos';
    protected $primaryKey = 'tipo_solicitud_residuos_id';

    protected $fillable = [
        'tipo_solicitud_residuos_nombre',
    ];

    // Relaciones
    public function solicitudesResiduos()
    {
        return $this->hasMany(SolicitudResiduos::class, 'tipo_solicitud_residuos_id');
    }
}
