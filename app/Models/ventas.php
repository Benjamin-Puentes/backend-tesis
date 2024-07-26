<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function cables()
    {
        return $this->belongsToMany(cable::class, 'venta_cable', 'venta_id', 'cable_id')->withPivot('venta_cable_cantidad');
    }

    public function rams()
    {
        return $this->belongsToMany(ram::class, 'ram_venta', 'venta_id', 'ram_id');
    }

    public function perifericos()
    {
        return $this->belongsToMany(periferico::class, 'periferico_venta', 'venta_id', 'periferico_id');
    }

    public function discos()
    {
        return $this->belongsToMany(disco_duro::class, 'disco_duro_venta', 'venta_id', 'disco_duro_id');
    }

    public function metodo_pago()
    {
        return $this->belongsTo(model_metodo_pago::class);
    }

    public function metodo_despacho()
    {
        return $this->belongsTo(model_metodo_despacho::class);
    }
    public function estado_compra()
    {
        return $this->belongsTo(model_estado_venta::class);
    }

    public function monto()
    {
        return $this->belongsTo(model_metodo_pago::class);
    }

    protected $table='ventas';
    protected $fillable = ['venta_id',
        'venta_email',
        'estado_venta_id',
        'direccion_id',
        'medoto_pago_id',
        'medoto_despacho_id',
        'doc_id'];
    use HasFactory;
}
