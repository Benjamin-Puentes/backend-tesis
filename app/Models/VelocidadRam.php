<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velocidad_Ram extends Model
{
    use HasFactory;

    protected $table = 'velocidad_ram';
    protected $primaryKey = 'velocidad_ram_id';

    protected $fillable = [
        'velocidad_ram_nombre',
    ];

    // Relaciones
    public function rams()
    {
        return $this->hasMany(Ram::class, 'velocidad_ram_id');
    }
}
