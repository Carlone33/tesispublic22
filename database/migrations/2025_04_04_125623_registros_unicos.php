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
        Schema::create('registros_unicos', function (Blueprint $table) {
            $table->id();
            $table->integer('guia')->unique();
            $table->string('url_img');
            $table->date('fecha');
            $table->string('delito');
            $table->string('direccion_dependencia');
            $table->string('estado_ciudadano');
            $table->string('nombre_abogado');
            $table->string('apellido_abogado');
            $table->string('cedula_abogado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
