<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comunicacion extends Model
{
     protected $fillable = [
     	'aspecto_comunicar',
     	'emisor',
     	'receptor',
     	'canal_comunicacion',
     	'tipo_comunicacion',
     	'registro',
     	'frecuencia',
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
