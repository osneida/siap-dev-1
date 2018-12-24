<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RevisionPolitica extends Model
{
     protected $fillable = [
          'numero',
     	'nombre_documento',
          'nro_revision_vigente',
          'texto_modificado',
     	'responsable',
     	'fecha_anomes',
     	'version',
     	'observacione',
     	'participante',
     	'politica_modificada',
          'modificado',
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
