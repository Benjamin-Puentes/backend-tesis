<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('direccion_nombre');
            $table->unsignedBigInteger('ciudad_id');
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->foreign('ciudad_id')->references('id')->on('ciudad');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('direccion');
    }
};
