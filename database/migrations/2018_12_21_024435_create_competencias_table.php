<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencias', function (Blueprint $table) {
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
            $table->text('objectivo')->nullable();
            $table->text('alcance')->nullable();
            $table->text('definicion')->nullable();
            $table->text('responsabilidades')->nullable();
            $table->text('descripcion_actividades')->nullable();
            $table->text('registros')->nullable();
            $table->text('referencias_internas')->nullable();
            $table->text('referencias_externas')->nullable();
            $table->text('control_cambio')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('competencias');
    }
}
