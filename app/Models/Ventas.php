<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'ventas';
    protected $primaryKey = 'venta_id';

    protected $fillable = [
        'venta_email',
        'estado_venta_id',
        'direccion_id',
        'metodo_pago_id',
        'metodo_despacho_id',
        'id_documentos',
        'id_usuario'
    ];

    // Relación con Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    // Relaciones muchos a muchos
    public function cables()
    {
        return $this->belongsToMany(Cable::class, 'venta_cable', 'venta_id', 'cable_id')
            ->withPivot('venta_cable_cantidad');
    }

    public function rams()
    {
        return $this->belongsToMany(Ram::class, 'ram_venta', 'venta_id', 'ram_id');
    }

    public function perifericos()
    {
        return $this->belongsToMany(Periferico::class, 'periferico_venta', 'venta_id', 'periferico_id');
    }

    public function discos()
    {
        return $this->belongsToMany(DiscoDuro::class, 'disco_duro_venta', 'venta_id', 'disco_duro_id');
    }

    // Relaciones uno a muchos inversas
    public function metodo_pago()
    {
        return $this->belongsTo(MetodoPago::class, 'metodo_pago_id');
    }

    public function metodo_despacho()
    {
        return $this->belongsTo(MetodoDespacho::class, 'metodo_despacho_id');
    }

    public function estado_venta()
    {
        return $this->belongsTo(EstadoVenta::class, 'estado_venta_id');
    }

    public function documento()
    {
        return $this->belongsTo(Documentos::class, 'id_documentos');
    }
}
