<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solicitud_residuos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('tipo_solicitud_residuos_id');
            $table->decimal('volumen_aproximado', 10, 2);
            $table->decimal('peso_aproximado', 10, 2);
            $table->decimal('volumen_real', 10, 2)->nullable();
            $table->decimal('peso_real', 10, 2)->nullable();
            $table->unsignedBigInteger('id_documentos');

            $table->foreign('id_usuario')->references('id')->on('user');
            $table->foreign('id_documentos')->references('id')->on('documentos');
            $table->foreign('tipo_solicitud_residuos_id')->references('id')->on('tipo_solicitud_residuos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solicitud_residuos');
    }
};
