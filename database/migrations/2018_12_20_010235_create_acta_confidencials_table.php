<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActaConfidencialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_confidencials', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('numero_revision_c')->nullable();
            $table->string('elaborado_por')->nullable();
            $table->string('revisado_por')->nullable();
            $table->string('cargo_elaborado')->nullable();
            $table->string('cargo_revisado')->nullable();
            $table->date('fecha_revision')->nullable();
            $table->date('fecha_creacion')->nullable();
            $table->boolean('estatus')->nullable();
            $table->string('numero')->nullable();
            $table->string('codigo_documento')->nullable();
            $table->string('nombre_documento')->nullable();
            $table->string('numero_revision')->nullable();
            $table->string('nombre_responsable')->nullable();
            $table->string('firma_responsable')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->string('tipo_documento')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('acta_confidencials');
    }
}
