<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre_apellido')->nullable();
            $table->text('nacimiento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('foto')->nullable();
            $table->string('imss')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfc')->nullable();
            $table->string('ine')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('calle')->nullable();
            $table->string('numero_exterior')->nullable();
            $table->string('numero_interior')->nullable();
            $table->string('colonia')->nullable();
            $table->string('municipio')->nullable();
            $table->string('estado')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono_casa')->nullable();
            $table->string('email')->nullable();
            $table->string('c_nombre')->nullable();
            $table->string('c_celular')->nullable();
            $table->string('c_telefono')->nullable();
            $table->string('c_email')->nullable();
            $table->string('grado_instrucion')->nullable();
            $table->string('titulo')->nullable();
            $table->string('idiomas')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personals');
    }
}
