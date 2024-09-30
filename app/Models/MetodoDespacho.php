<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoDespacho extends Model
{
    use HasFactory;

    protected $table = 'metodo_despacho';
    protected $primaryKey = 'metodo_despacho_id';

    protected $fillable = [
        'metodo_despacho_nombre',
    ];

    // Relaciones
    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'metodo_despacho_id');
    }
}
