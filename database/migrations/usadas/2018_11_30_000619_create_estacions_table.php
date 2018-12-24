<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',8);
            $table->string('nombre',32);
            $table->string('descripción',64);
            $table->unsignedInteger('id_propietario');
            $table->unsignedInteger('id_grupo');
            $table->string('nombre_responsable',32);
            $table->string('email_responsable',16);
            $table->string('rfc_estacion',16);
            $table->string('nro_estacion',16);
            $table->string('nroper_cre',16);
            $table->string('calle',64);
            $table->string('colonia',32);
            $table->string('codigo_postal',5);
            $table->string('estado',32);
            $table->string('municipio',32);
            $table->string('entidad_federal',32);
            $table->string('referencia1',128);
            $table->string('referencia2',128);
            $table->string('telefono1',16);
            $table->string('telefono2',16);
            $table->string('celular1',16);
            $table->string('celular2',16);
            $table->string('email_estacion',16);
            $table->string('sitioweb',16);
            $table->string('nro_instrumento',16);
            $table->timestamp('fecha_constitucion');
            $table->string('notario_constitucion',32);
            $table->string('ciudad_constitucion',32);
            $table->timestamp('fecha_emision_replegal');
            $table->string('nombre_replegal',32);
            $table->string('nro_inst_replegal',16);
            $table->timestamp('fecha_replegal');
            $table->string('notario_replegal',32);
            $table->string('ciudad_replegal',32);
            $table->unsignedInteger('nro_tanques_individuales');
            $table->unsignedInteger('nro_tanques_compartidos');
            $table->unsignedInteger('capacidad_tanques');
            $table->unsignedInteger('numero_islas');
            $table->unsignedInteger('numero_despachadores');
            $table->unsignedInteger('numero_empleados');
            $table->timestamp('fecha_inicio_operacion');
            $table->unsignedInteger('estatus_estacion');
            $table->string('responsable_obra_diseno',64);
            $table->string('numero_permiso_diseño',16);
            $table->string('aditivo_gasolina1',32);
            $table->string('aditivo_gasolina2',32);
            $table->string('aditivo_diesel',32);
            $table->string('forma_recepcion',16);
            $table->unsignedInteger('promedio_mensual_ventas');
            $table->boolean('tienda_conveniencias');
            $table->boolean('cobro_uso_banos');
            $table->boolean('estatus');
            $table->timestampS();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estacions');
    }
}
