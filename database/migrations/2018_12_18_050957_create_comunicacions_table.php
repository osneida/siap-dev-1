<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunicacionsTable extends Migration
{

    public function up()
    {
        Schema::create('comunicacions', function (Blueprint $table) {
            $table->increments('id');

            $table->text('aspecto_comunicar');
            $table->text('emisor');
            $table->text('receptor');
            $table->text('canal_comunicacion');
            $table->string('tipo_comunicacion',1); 
            $table->text('registro');
            $table->text('frecuencia');
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
        });
    }

    public function down()
    {
        Schema::dropIfExists('comunicacions');
    }
}
