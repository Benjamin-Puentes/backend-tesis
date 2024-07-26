<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDiscoDuro extends Model
{
    use HasFactory;

    protected $table = 'venta_disco_duro';

    protected $fillable = [
        'venta_id',
        'disco_duro_id',
    ];

    // Relaciones
    public function venta()
    {
        return $this->belongsTo(Ventas::class, 'venta_id');
    }

    public function discoDuro()
    {
        return $this->belongsTo(DiscoDuro::class, 'disco_duro_id');
    }
}
