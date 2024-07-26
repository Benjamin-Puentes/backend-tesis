<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    use HasFactory;

    protected $table = 'disponibilidad';
    protected $primaryKey = 'disponibilidad_id';

    protected $fillable = [
        'disponibilidad_nombre',
    ];

    // Relaciones
    public function rams()
    {
        return $this->hasMany(Ram::class, 'disponibilidad_id');
    }

    public function perifericos()
    {
        return $this->hasMany(Periferico::class, 'disponibilidad_id');
    }
    
    public function discos()
    {
        return $this->hasMany(disco_duro::class, 'disponibilidad_id');
    }
}
