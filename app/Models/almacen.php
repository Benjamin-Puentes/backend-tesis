<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;

    protected $table = 'almacen';
    protected $primaryKey = 'almacen_id';

    protected $fillable = [
        'direccion_id',
        'ciudad_id',
        'calle_nombre'
    ];

    // Relaciones
    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'direccion_id');
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }

}
