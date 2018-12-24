<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramaDeCapacitacionesLsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_de_capacitaciones_ls', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('id_programa')->nullable();
            $table->string('nombre_capacitacion')->nullable();
            $table->string('tipo_accion')->nullable();
            $table->string('capacitacion_int')->nullable();
            $table->string('capacitacion_ext')->nullable();
            $table->string('contenido')->nullable();
            $table->string('costo_aproximado')->nullable();
            $table->string('mecanismo_medicion')->nullable();
            $table->string('requisito')->nullable();
            $table->string('duracion_curso')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('programa_de_capacitaciones_ls');
    }
}
