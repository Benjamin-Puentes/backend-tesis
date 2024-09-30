<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disco_duro_venta extends Model
{

    public function venta()
    {
        return $this->belongsTo(ventas::class);
    }

    public function disco()
    {
        return $this->belongsTo(disco_duro::class);
    }

    protected $table='disco_duro_venta';
    protected $fillable = ['disco_duro_id',
                            'venta_id',
                            'descuento_id'];
    use HasFactory;
}
