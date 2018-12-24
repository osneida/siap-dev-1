<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDescripcionPuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcion_puestos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('numero_revision')->nullable();
            $table->string('elaborado_por')->nullable();
            $table->string('revisado_por')->nullable();
            $table->string('cargo_elaborado')->nullable();
            $table->string('cargo_revisado')->nullable();
            $table->date('fecha_revision')->nullable();
            $table->date('fecha_creacion')->nullable();
            $table->boolean('estatus')->nullable();
            $table->string('nombre_puesto')->nullable();
            $table->string('supervisor_inmediato')->nullable();
            $table->string('nivel_autoridad')->nullable();
            $table->text('funciones_responsabilidad')->nullable();
            $table->text('actividades')->nullable();
            $table->string('nivel_academico')->nullable();
            $table->string('formacion')->nullable();
            $table->string('experiencia')->nullable();
            $table->string('competencias')->nullable();
            $table->string('habilidades')->nullable();
            $table->string('aprobado_por')->nullable();
            $table->string('recibido_por')->nullable();
            $table->string('firma_aprobado')->nullable();
            $table->string('firma_recibido')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('descripcion_puestos');
    }
}
