<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram_venta extends Model
{
    use HasFactory;

    protected $table = 'ram_venta';

    protected $fillable = [
        'venta_id',
        'ram_id',
    ];

    // Relaciones
    public function venta()
    {
        return $this->belongsTo(Ventas::class, 'venta_id');
    }

    public function ram()
    {
        return $this->belongsTo(Ram::class, 'ram_id');
    }
}
