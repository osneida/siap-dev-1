<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProcesoInduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_induccions', function (Blueprint $table) {
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
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_finalizacion')->nullable();
            $table->string('personal_en_induccion')->nullable();
            $table->string('puesto_induccion')->nullable();
            $table->string('personal_responsable')->nullable();
            $table->string('puesto_responsable')->nullable();
            $table->string('motivo')->nullable();
            $table->string('especifique')->nullable();
            $table->text('actividades')->nullable();
            $table->string('documento_asociado')->nullable();
            $table->string('firma_trabajador')->nullable();
            $table->string('firma_capacitador')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proceso_induccions');
    }
}
