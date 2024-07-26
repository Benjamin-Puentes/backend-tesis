<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periferico_venta extends Model
{
    protected $table='periferico_venta';
    protected $fillable = ['periferico_id',
        'venta_id'];
    use HasFactory;
}
