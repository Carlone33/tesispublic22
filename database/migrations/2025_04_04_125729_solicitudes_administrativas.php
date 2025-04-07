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
        Schema::create('solicitudes_administrativas', function (Blueprint $table) {
            $table->id();
            $table->integer('año');
            $table->integer('guia');
            $table->integer('cedula')->unique();
            $table->string('url_img');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('lugar');
            $table->date('fecha');
            $table->string('estado');
            $table->string('delito');
            $table->string('direccion');
            $table->string('planilla');
            $table->integer('telefono')->unique();
            $table->integer('telefono_local');
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
