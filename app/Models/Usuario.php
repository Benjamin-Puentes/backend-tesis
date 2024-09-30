<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'usuario_correo',
        'usuario_nombre',
        'usuario_privilegios',
        'direccion_id',
        'password'
    ];

    // Relaciones
    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'direccion_id');
    }

    public function herramientasSolicitudes()
    {
        return $this->hasMany(HerramientaSolicitud::class, 'user_id');
    }

    public function residuosSolicitudes()
    {
        return $this->hasMany(SolicitudResiduos::class, 'user_id');
    }
}
