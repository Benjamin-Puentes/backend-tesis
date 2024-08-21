<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscoDuroVenta extends Model
{

    public function venta()
    {
        return $this->belongsTo(ventas::class);
    }

    public function disco()
    {
        return $this->belongsTo(discoduro::class);
    }

    protected $table='disco_duro_venta';
    protected $fillable = ['disco_duro_id',
                            'venta_id',
                            'descuento_id'];
    use HasFactory;
}
