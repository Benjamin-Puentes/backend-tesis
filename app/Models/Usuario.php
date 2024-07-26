<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'usuario_id';

    protected $fillable = [
        'usuario_correo',
        'usuario_nombre',
        'usuario_privilegios',
        'direccion_id',
    ];

    // Relaciones
    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'direccion_id');
    }

    public function herramientasSolicitudes()
    {
        return $this->hasMany(HerramientaSolicitud::class, 'usuario_id');
    }

    public function residuosSolicitudes()
    {
        return $this->hasMany(SolicitudResiduos::class, 'usuario_id');
    }
}
