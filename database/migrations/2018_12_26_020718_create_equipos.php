<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos.equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('serial');
            $table->integer('id_tipo_equipo');
            $table->integer('id_ubicacion');
            $table->string('criticidad');
            $table->date('fecha_inicio')->nullable();
            $table->boolean('operacion')->default(false);
            $table->boolean('mantenimiento')->default(false); 
            $table->boolean('seguridad')->default(false); 
            $table->boolean('capacitacion')->default(false);
            $table->boolean('comunicacion')->default(false); 
            $table->boolean('estatus', true)->default(true);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
