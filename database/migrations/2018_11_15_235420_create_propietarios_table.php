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
            $table->string('codigo',8);
            $table->string('nombre',32);
            $table->string('apellido_paterno',32);
            $table->string('apellido_materno',32)->nullable();
            $table->string('email')->unique();
            $table->string('direccion',64)->nullable();
            $table->string('telefono1',16)->nullable();            
            $table->string('telefono2',16)->nullable();
            $table->string('celular1',16)->nullable();            
            $table->string('celular2',16)->nullable();
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
