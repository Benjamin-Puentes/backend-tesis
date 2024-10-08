<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('venta_id');
            $table->timestamps();
            $table->string('venta_email');

            $table->unsignedBigInteger('estado_venta_id')->nullable();
            $table->unsignedBigInteger('direccion_id')->nullable();
            $table->unsignedBigInteger('metodo_pago_id');
            $table->unsignedBigInteger('metodo_despacho_id')->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_documentos');

            // Definir claves foráneas
            $table->foreign('estado_venta_id')->references('id')->on('estado_venta');
            $table->foreign('direccion_id')->references('id')->on('direccion');
            $table->foreign('metodo_pago_id')->references('id')->on('metodo_pago');
            $table->foreign('metodo_despacho_id')->references('id')->on('metodo_despacho');
            $table->foreign('id_usuario')->references('id')->on('user');
            $table->foreign('id_documentos')->references('id')->on('documentos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
