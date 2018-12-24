<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politica extends Model
{
   	protected $fillable = [
   		'id_estacion', 'descripcion', 'fecha_creacion', 'objetivo',  'alcance',
		'definicion', 'definicion_politica', 'definicion_vision',
		'definicion_mision', 'definicion_objetivo', 'definicion_pt_interesada',
		'definicion_compromiso', 'definicion_proceso', 'definicion_proveedor',
		'definicion_proveedor_ext', 'definicion_contratista', 'subcontratista',
		'prestador_servicio', 'generalidad',  'revision_analisis',
		'elaboracion_politica', 'aprobacion', 'comunicacion_dist', 'revision',
		'registro', 'referencia_interna', 'referencia_extena', 'numero_revision',
		'fecha_revision', 'descripcion_cambio', 'originado', 'aprobado', 'estatus',
		'elaboradopor','revisadopor','cargo_elaboradopor','cargo_revisadopor','nota_objetivo',
		'responsabilidad_ad','responsabilidad_g','responsabilidad_jp'
		//'medio_comunicacion',
	];
}



