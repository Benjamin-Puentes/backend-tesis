<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEntrada extends Model
{
    use HasFactory;

    protected $table = 'tipo_entrada';
    protected $primaryKey = 'tipo_entrada_id';

    protected $fillable = [
        'tipo_entrada_nombre',
    ];

    // Relaciones
    public function perifericos()
    {
        return $this->hasMany(Periferico::class, 'tipo_entrada_id');
    }

    public function discos()
    {
        return $this->hasMany(disco_duro::class, 'tipo_entrada_id');
    }
}
