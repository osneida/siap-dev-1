<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_estacion');
            $table->text('proposito');
            $table->date('fecha')->nullable();         
            $table->text('convocadapor');
            $table->text('lugar_junta');
            $table->string('hora_inicio',10)->nullable(); 
            $table->string('hora_fin',10)->nullable(); 
            $table->string('participante',100);
            $table->string('cargo_participante',100);
            $table->string('participante2',100)->nullable(); 
            $table->string('cargo_participante2',100)->nullable(); 
            $table->string('participante3',100)->nullable(); 
            $table->string('cargo_participante3',100)->nullable(); 
            $table->string('participante4',100)->nullable(); 
            $table->string('cargo_participante4',100)->nullable(); 
            $table->string('participante5',100)->nullable(); 
            $table->string('cargo_participante5',100)->nullable(); 
            $table->string('participante6',100)->nullable(); 
            $table->string('cargo_participante6',100)->nullable(); 
            $table->text('aspecto_tratado');
            //$table->text('responsable_tarea');
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
        Schema::dropIfExists('minutas');
    }
}
