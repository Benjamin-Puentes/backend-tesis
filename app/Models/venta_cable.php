<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta_cable extends Model
{
    protected $table='venta_cable';
    protected $fillable = [
        'venta_cable_cantidad',
        'cable_id',
        'venta_id',
        ];
    use HasFactory;
}
