<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';
    protected $primaryKey = 'compra_id';

    protected $fillable = [
        'detalles',
        'compra_fecha',
        'id_documentos',
    ];

    // Relaciones
    public function documento()
    {
        return $this->belongsTo(Documentos::class, 'id_documentos');
    }

}
