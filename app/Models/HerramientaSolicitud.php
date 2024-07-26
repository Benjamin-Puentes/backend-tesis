<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HerramientaSolicitud extends Model
{
    use HasFactory;

    protected $table = 'herramienta_solicitud';

    protected $fillable = [
        'herramienta_id',
        'usuario_id',
    ];

    // Relaciones
    public function herramienta()
    {
        return $this->belongsTo(Herramienta::class, 'herramienta_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
