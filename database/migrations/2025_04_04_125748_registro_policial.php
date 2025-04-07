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
        Schema::create('registro_policial', function (Blueprint $table) {
            $table->id();
            $table->integer('año');
            $table->integer('guia');
            $table->integer('cedula')->unique();
            $table->string('url_img');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion_domicilio');
            $table->integer('telefono');
            $table->integer('telefono_trabajo');
            $table->string('direccion_trabajo');
            $table->integer('numero_oficio');
            $table->string('lugar');
            $table->date('fecha');
            $table->string('juzgado');
            $table->string('nombre_apoderado');
            $table->string('apellido_apoderado');
            $table->integer('cedula_apoderado');
            $table->integer('telefono_apoderado');
            $table->string('direccion_apoderado');
            $table->string('direccion_trabajo_apoderado');
            $table->integer('telefono_trabajo_apoderado');
            $table->string('nombre_abogado');
            $table->string('apellido_abogado');
            $table->integer('cedula_abogado');
            $table->string('Observaciones');
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
