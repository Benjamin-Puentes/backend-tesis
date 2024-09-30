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
            $table->timestamps();
            $table->string('detalles');
            $table->date('compra_fecha');
            $table->unsignedBigInteger('id_documentos');

            $table->foreign('id_documentos')->references('id')->on('documentos');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('compras');
    }

};
