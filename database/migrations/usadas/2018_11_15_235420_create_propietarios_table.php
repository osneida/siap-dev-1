<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {            
            $table->increments('id');
            $table->string('codigo',8)->nullable();
            $table->string('nombre',32)->nullable();
            $table->string('apellido_paterno',32)->nullable();
            $table->string('apellido_materno',32);
            $table->string('email')->unique();
            $table->string('direccion',64);
            $table->string('telefono1',16);            
            $table->string('telefono2',16);
            $table->string('celular1',16);            
            $table->string('celular2',16);
            $table->timestamps();
            $table->timestamp('fecha_baja');
            $table->boolean('estatus')->default(false);
            //$table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propietarios');
    }
}
