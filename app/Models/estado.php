<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estado';
    protected $primaryKey = 'estado_id';

    protected $fillable = [
        'estado_nombre',
    ];

    // Relaciones
    public function rams()
    {
        return $this->hasMany(Ram::class, 'estado_id');
    }

    public function perifericos()
    {
        return $this->hasMany(Periferico::class, 'estado_id');
    }

    public function discos()
    {
        return $this->hasMany(disco_duro::class, 'estado_id');
    }
}
