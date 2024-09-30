<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPeriferico extends Model
{
    use HasFactory;

    protected $table = 'tipo_periferico';
    protected $primaryKey = 'tipo_periferico_id';

    protected $fillable = [
        'tipo_periferico_nombre',
    ];

    // Relaciones
    public function perifericos()
    {
        return $this->hasMany(Periferico::class, 'tipo_periferico_id');
    }
}
