<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincia';
    protected $primaryKey = 'provincia_id';

    protected $fillable = [
        'provincia_nombre',
        'region_id',
    ];

    // Relaciones
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function ciudades()
    {
        return $this->hasMany(Ciudad::class, 'provincia_id');
    }
}
