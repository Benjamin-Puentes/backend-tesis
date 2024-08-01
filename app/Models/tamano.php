<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamano extends Model
{
    use HasFactory;

    protected $table = 'tamano';
    protected $primaryKey = 'tamano_id';

    protected $fillable = [
        'tamano_nombre',
    ];

    // Relaciones
    public function discosDuros()
    {
        return $this->hasMany(Disco_Duro::class, 'tamano_id');
    }
}
