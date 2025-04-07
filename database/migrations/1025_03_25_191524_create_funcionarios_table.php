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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id')->unique();
            $table->unsignedBigInteger('unidad_administrativa_id');
            $table->integer('credencial')->unique()->nullable();
            $table->timestamp('creado_el')->useCurrent();
            $table->timestamp('actualizado_el')->useCurrent();

            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('unidad_administrativa_id')->references('id')->on('unidades_administrativas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
