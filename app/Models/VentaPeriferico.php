<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaPeriferico extends Model
{
    use HasFactory;

    protected $table = 'venta_periferico';

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
