<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_estado_venta extends Model
{
    public function venta()
    {
        return $this->hasMany(ventas::class);
    }
    protected $table='estado_venta';
    protected $fillable = ['estado_venta_nombre','estado_venta_slug'];
    use HasFactory;
}
