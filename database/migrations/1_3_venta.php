<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('venta_id');
            $table->string('venta_email');

            $table->unsignedBigInteger('estado_venta_id')->nullable();
            $table->unsignedBigInteger('direccion_id')->nullable();
            $table->unsignedBigInteger('metodo_pago_id');
            $table->unsignedBigInteger('metodo_despacho_id');
            $table->unsignedBigInteger('id_usuario');

            $table->foreign('estado_venta_id')->references('id')->on('estado_venta');
            $table->foreign('direccion_id')->references('id')->on('direccion');
            $table->foreign('metodo_pago_id')->references('id')->on('metodo_pago');
            $table->foreign('metodo_despacho_id')->references('id')->on('metodo_despacho');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('venta');
    }
};
