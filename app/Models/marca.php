<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $table = 'marca';
    protected $primaryKey = 'marca_id';

    protected $fillable = [
        'marca_nombre',
    ];

    // Relaciones
    public function discosDuros()
    {
        return $this->hasMany(Disco_Duro::class, 'marca_id');
    }

    public function rams()
    {
        return $this->hasMany(Ram::class, 'marca_id');
    }

    public function perifericos()
    {
        return $this->hasMany(Periferico::class, 'marca_id');
    }
}
