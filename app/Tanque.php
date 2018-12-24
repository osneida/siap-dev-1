<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanque extends Model
{
	protected $fillable = [
	'estacion_id','nro_tanques_individuales','nro_tanques_compartidos','capacidad_tanques','aditivo_gasolina1','aditivo_gasolina2','aditivo_diesel'
	];
}
