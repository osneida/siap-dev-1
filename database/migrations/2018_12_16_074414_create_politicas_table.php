<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_estacion');
            $table->text('descripcion');
            $table->date('fecha_creacion');
            $table->text('objetivo');
            $table->text('alcance');
            $table->text('definicion');
            $table->text('definicion_politica'); 
            $table->text('definicion_vision'); 
            $table->text('definicion_mision');   
            $table->text('definicion_objetivo');
            $table->text('definicion_pt_interesada');
            $table->text('definicion_compromiso');
            $table->text('definicion_proceso');
            $table->text('definicion_proveedor');
            $table->text('definicion_proveedor_ext');
            $table->text('definicion_contratista');
            $table->text('subcontratista');
            $table->text('prestador_servicio');
            $table->text('generalidad');
           // $table->text('medio_comunicacion');
            $table->text('revision_analisis');
            $table->text('elaboracion_politica');
            $table->text('aprobacion');
            $table->text('comunicacion_dist');
            $table->text('revision');
            $table->text('registro');
            $table->text('referencia_interna');
            $table->text('referencia_extena');
            $table->integer('numero_revision')->nullable(); ;
            $table->date('fecha_revision')->nullable(); ;
            $table->text('descripcion_cambio')->nullable(); 
            $table->text('originado')->nullable(); ;
            $table->text('aprobado')->nullable(); ; 
            $table->text('revisadopor'); 
            $table->text('cargo_elaboradopor'); 
            $table->text('cargo_revisadopor'); 
            $table->text('nota_objetivo'); 
            $table->text('responsabilidad_ad'); 
            $table->text('responsabilidad_g'); 
            $table->text('responsabilidad_jp'); 
            $table->text('elaboradopor'); 
            $table->boolean('estatus', true)->default(true);                                             
            $table->timestamps();
            $table->foreign('id_estacion')->references('id')->on('estacions');
        });
    }


    public function down()
    {
        Schema::dropIfExists('politicas');
    }
}
