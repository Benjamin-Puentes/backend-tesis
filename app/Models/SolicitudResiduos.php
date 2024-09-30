<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudResiduos extends Model
{
    use HasFactory;

    protected $table = 'solicitud_residuos';

    protected $fillable = [
        'usuario_id',
        'tipo_solicitud_residuos_id',
        'volumen_aproximado',
        'peso_aproximado',
        'volumen_real',
        'peso_real',
        'id_documentos',
    ];

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function tipoSolicitud()
    {
        return $this->belongsTo(TipoSolicitudResiduos::class, 'tipo_solicitud_residuos_id');
    }

    public function documento()
    {
        return $this->belongsTo(Documentos::class, 'id_documentos');
    }
}
