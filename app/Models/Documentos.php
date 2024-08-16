<?php
// app/Models/Documento.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $table = 'documentos';
    protected $primaryKey = 'documentos_id';

    protected $fillable = [
        'doc_tipo',
        'descripcion', 
        'doc_fecha', 
        'doc_monto', 
        'doc_archivo', //archivo es la ruta en el sv
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'documentos_id');
    }

    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'documentos_id');
    }

    public function residuos()
    {
        return $this->hasMany(SolicitudResiduos::class, 'documentos_id');
    }
    
    use HasFactory;
}
