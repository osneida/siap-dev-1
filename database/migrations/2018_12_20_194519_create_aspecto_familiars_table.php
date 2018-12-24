<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAspectoFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspecto_familiars', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('id_personal')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('nombre')->nullable();
            $table->string('edad')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('domicilio')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('aspecto_familiars');
    }
}
