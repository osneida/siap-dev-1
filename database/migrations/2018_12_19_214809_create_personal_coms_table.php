<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalComsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_coms', function (Blueprint $table) {
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
            $table->string('user')->nullable();
            $table->string('pass')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personal_coms');
    }
}
