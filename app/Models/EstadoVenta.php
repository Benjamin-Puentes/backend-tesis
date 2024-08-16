<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoVenta extends Model
{
    use HasFactory;

    protected $table = 'estado_venta';
    protected $primaryKey = 'estado_venta_id';

    protected $fillable = [
        'estado_venta_nombre',
        'estado_venta_slug'
    ];

    // Relaciones
    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'estado_venta_id');
    }
}
