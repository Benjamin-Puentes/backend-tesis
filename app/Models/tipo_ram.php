<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRam extends Model
{
    use HasFactory;

    protected $table = 'tipo_ram';
    protected $primaryKey = 'tipo_ram_id';

    protected $fillable = [
        'tipo_ram_nombre',
    ];

    // Relaciones
    public function rams()
    {
        return $this->hasMany(Ram::class, 'tipo_ram_id');
    }
}
