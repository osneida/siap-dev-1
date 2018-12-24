<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramaDeCapacitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_de_capacitaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre_trabajador')->nullable();
            $table->date('periodo_ejecucion')->nullable();
            $table->string('cargo_trabajador')->nullable();
            $table->text('objetivo_programa')->nullable();
            $table->string('elaborado_por')->nullable();
            $table->string('firma_elaborado')->nullable();
            $table->string('aprobado_por')->nullable();
            $table->string('firma_aprobado')->nullable();
            $table->text('obsevaciones')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('programa_de_capacitaciones');
    }
}
