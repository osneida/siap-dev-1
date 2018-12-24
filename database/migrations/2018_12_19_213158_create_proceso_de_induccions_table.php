<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProcesoDeInduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_de_induccions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha_de_inicio')->nullable();
            $table->date('fecha_de_finalizacion')->nullable();
            $table->string('personal_en_induccion')->nullable();
            $table->string('puesto_a')->nullable();
            $table->string('personal_responsable')->nullable();
            $table->string('puesto_b')->nullable();
            $table->string('actividades_a_realizar')->nullable();
            $table->string('documento_asociado')->nullable();
            $table->string('nombre_del_trabajador')->nullable();
            $table->string('nombre_del_capacitador')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proceso_de_induccions');
    }
}
