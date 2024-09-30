<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HerramientaEstado extends Model
{
    protected $table = 'herramienta_estado';
    protected $primaryKey = 'herramienta_estado_id';

    protected $fillable =[
        'herramienta_estado_descripcion'
    ];
    use HasFactory;
}
