<?php
// app/Models/Documento.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'doc_tipo', 'descripcion', 'doc_fecha', 'doc_monto', 'archivo', //archivo es la ruta en el sv
    ];
}
