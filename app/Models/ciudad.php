<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudad';
    protected $primaryKey = 'ciudad_id';

    protected $fillable = [
        'ciudad_nombre',
        'provincia_id',
    ];

    // Relaciones
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id');
    }

    public function direcciones()
    {
        return $this->hasMany(Direccion::class, 'ciudad_id');
    }
}
