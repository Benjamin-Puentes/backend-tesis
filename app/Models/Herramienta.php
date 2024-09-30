<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    use HasFactory;

    protected $table = 'herramienta';
    protected $primaryKey = 'herramienta_id';

    protected $fillable = [
        'herramienta_nombre',
        'herramienta_estado_id',
    ];

    // Relaciones
    public function estado()
    {
        return $this->belongsTo(HerramientaEstado::class, 'herramienta_estado_id');
    }

    public function solicitudes()
    {
        return $this->hasMany(HerramientaSolicitud::class, 'herramienta_id');
    }
}
