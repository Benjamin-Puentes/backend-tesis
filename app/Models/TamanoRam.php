<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamanoRam extends Model
{
    use HasFactory;

    protected $table = 'tamano_ram';
    protected $primaryKey = 'tamano_ram_id';

    protected $fillable = [
        'tamano_ram_nombre',
    ];

    // Relaciones
    public function rams()
    {
        return $this->hasMany(Ram::class, 'tamano_ram_id');
    }
}
