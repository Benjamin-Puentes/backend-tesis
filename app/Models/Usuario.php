<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre_usuario', 'contrasena', 'tipo_usuario', 'correo_electronico', 'estado_cuenta'
    ];

    protected $hidden = [
        'contrasena', 'remember_token',
    ];

    public function documentos()
    {
        return $this->hasMany(Documento::class, 'id_usuario');
    }
}