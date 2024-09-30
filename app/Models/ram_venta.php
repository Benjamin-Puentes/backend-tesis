<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ram_venta extends Model
{
    protected $table='ram_venta';
    protected $fillable = ['ram_id',
        'venta_id'];
    use HasFactory;
}
