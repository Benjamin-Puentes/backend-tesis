<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doc_id')->constrained('documentos');
            $table->date('compra_fecha');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('compras');
    }

};
