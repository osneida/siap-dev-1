<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisionPoliticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revision_politicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_estacion');
            $table->string('numero',8);
            $table->text('nombre_documento');
            $table->text('texto_modificado');
            $table->string('nro_revision_vigente',8);
            $table->text('responsable'); 
            $table->string('fecha_anomes',20);
            $table->string('version',20);
            $table->text('observacione');
            $table->string('participante',100);
            $table->text('politica_modificada');
            $table->string('modificado',1);
           //campos para todas las tablas, es el encabezado
            $table->string('elaboradopor',100); 
            $table->string('revisadopor',100); 
            $table->string('cargo_elaboradopor',100); 
            $table->string('cargo_revisadopor',100)->nullable();
            $table->string('numero_revision',3)->nullable();
            $table->date('fecha_revision')->nullable();
            $table->date('fecha_creacion')->nullable();
            //campo para todas las tablas estatus
            $table->boolean('estatus', true)->default(true);  


            $table->timestamps();
            $table->foreign('id_estacion')->references('id')->on('estacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revision_politicas');
    }
}
 