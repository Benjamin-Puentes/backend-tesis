<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamanoDiscoDuro extends Model
{
    use HasFactory;

    protected $table = 'tamano_disco_duro';
    protected $primaryKey = 'tamano_disco_duro_id';

    protected $fillable = [
        'tamano_disco_duro_nombre',
    ];

    // Relaciones
    public function discosDuros()
    {
        return $this->hasMany(Disco_Duro::class, 'tamano_disco_duro_id');
    }
}