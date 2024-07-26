<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'region';
    protected $primaryKey = 'region_id';

    protected $fillable = [
        'region_nombre',
    ];

    // Relaciones
    public function provincias()
    {
        return $this->hasMany(Provincia::class, 'region_id');
    }
}
