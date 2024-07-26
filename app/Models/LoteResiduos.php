<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoteResiduos extends Model
{
    use HasFactory;

    protected $table = 'lote_residuos';

    protected $fillable = [
        'solicitud_residuos_id',
    ];

    // Relaciones
    public function solicitudResiduos()
    {
        return $this->belongsTo(SolicitudResiduos::class, 'solicitud_residuos_id');
    }
}
