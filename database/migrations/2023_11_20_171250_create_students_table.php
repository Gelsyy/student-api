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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('ci')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->string('edad');
            $table->string('color_piel');
            $table->string('sexo');
            $table->string('telefono');
            $table->string('pais');
            $table->string('nombre_padre');
            $table->string('nombre_madre');
            $table->string('nivel_academico_padre');
            $table->string('nivel_academico_madre');
            $table->string('organizacion_politica');
            $table->string('estado');
            $table->string('centro_trabajo')->nullable();
            $table->date('fecha_de_ingreso');
            $table->string('origen_academico');
            $table->string('estado_civil');
            $table->string('correo')->unique();
            $table->string('natural_de');
            $table->date('fecha_matricula');
            $table->date('fecha_de_ingreso_ces');
            $table->string('tipo_servicio')->nullable();
            $table->string('grupo');
            $table->string('annio');
            $table->string('carrera');
            $table->timestamps();

            $table->unsignedBigInteger('tipo_estudiante_id');
            $table->foreign('tipo_estudiante_id')->references('id')->on('student__types');

            $table->unsignedBigInteger('situacion_academica_id');
            $table->foreign('situacion_academica_id')->references('id')->on('academic__states');

            $table->unsignedBigInteger('tipo_curso_id');
            $table->foreign('tipo_curso_id')->references('id')->on('courses');

            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipalities');

            $table->unsignedBigInteger('regimen_estudio_id');
            $table->foreign('regimen_estudio_id')->references('id')->on('study__regimes');

            $table->unsignedBigInteger('facultad_id');
            $table->foreign('facultad_id')->references('id')->on('faculties');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
