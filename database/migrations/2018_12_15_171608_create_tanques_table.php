<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanques', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('estacion_id')->nullable();
            $table->foreign('estacion_id')->references('id')->on('estacions')->onDelete('cascade');            
            $table->unsignedInteger('nro_tanques_individuales')->nullable();
            $table->unsignedInteger('nro_tanques_compartidos')->nullable();
            $table->unsignedInteger('capacidad_tanques')->nullable();
            $table->string('aditivo_gasolina1')->nullable();
            $table->string('aditivo_gasolina2')->nullable();
            $table->string('aditivo_diesel')->nullable();           
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
        Schema::dropIfExists('tanques');
    }
}
