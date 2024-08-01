<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periferico_venta extends Model
{
    use HasFactory;

    protected $table = 'periferico_venta';

    protected $fillable = [
        'venta_id',
        'periferico_id',
    ];

    // Relaciones
    public function venta()
    {
        return $this->belongsTo(Ventas::class, 'venta_id');
    }

    public function periferico()
    {
        return $this->belongsTo(Periferico::class, 'periferico_id');
    }
}
