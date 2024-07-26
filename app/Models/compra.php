<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    protected $table = 'compras';
    protected $primaryKey = 'compra_id';

    protected $fillable = [
        'detalles',
        'compra_fecha',
        'doc_id',
    ];

    // Relaciones
    public function documento()
    {
        return $this->belongsTo(Documentos::class, 'doc_id');
    }

}
