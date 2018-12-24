<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuta extends Model
{
   protected $fillable = [
   		'id_estacion',
   	    'proposito', 
   	    'fecha', 
   	    'convocadapor',  
   	    'lugar_junta',
		'hora_inicio', 
		'hora_fin', 
		'participante',
		'cargo_participante',
		'participante2',
		'cargo_participante2',
		'participante3',
		'cargo_participante3',
		'participante4',
		'cargo_participante4',
		'participante5',
		'cargo_participante5',
		'participante6',
		'cargo_participante6',
		'aspecto_tratado', 
		//'responsable_tarea',
		//para todas las tablas
		'fecha_creacion',
		'numero_revision', 
		'fecha_revision',
		'elaboradopor',
		'revisadopor',
		'cargo_elaboradopor',
		'cargo_revisadopor',
		'estatus'
	];
}
