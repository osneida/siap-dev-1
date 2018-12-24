<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoobligacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoobligaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',8)->nullable();
            $table->string('nombre',32)->nullable();
            $table->string('descripcion ',64)->nullable();
            $table->boolean('estatus')->default(false);
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
        Schema::dropIfExists('tipoobligaciones');
    }
}
