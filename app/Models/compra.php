<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    protected $table='compra';
    protected $fillable = [
        'id_compras',
        'doc_id'
    ];
    use HasFactory;
}
