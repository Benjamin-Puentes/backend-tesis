<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('venta_disco_duros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('disco_duro_id');
            $table->unsignedBigInteger('venta_id');
            $table->unsignedBigInteger('descuento_id')->nullable();

            $table->foreign('disco_duro_id')->references('id')->on('disco_duro');
            $table->foreign('venta_id')->references('id')->on('ventas');
            $table->foreign('descuento_id')->references('id')->on('descuento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_disco_duros');
    }
};
