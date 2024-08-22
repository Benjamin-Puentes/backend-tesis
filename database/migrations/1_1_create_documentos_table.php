<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('doc_tipo');
            $table->string('doc_descripcion')->nullable();
            $table->date('doc_fecha');
            $table->decimal('doc_monto', 15, 2);
            $table->string('doc_archivo')->nullable();
        });

    }

    public function down()
    {
        Schema::dropIfExists('documentos');
    }
};
