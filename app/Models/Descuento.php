<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    use HasFactory;

    protected $table = 'descuento';
    protected $primaryKey = 'descuento_id';

    protected $fillable = [
        'descuento_porcentaje',
    ];

    // Relaciones
    public function discosDuros()
    {
        return $this->hasMany(Disco_Duro::class, 'descuento_id');
    }

    public function rams()
    {
        return $this->hasMany(Ram::class, 'descuento_id');
    }

    public function perifericos()
    {
        return $this->hasMany(Periferico::class, 'descuento_id');
    }
}
