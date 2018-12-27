<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstacionTanques extends Model
{
	protected $fillable = [
        'nro_tanques_individuales','nro_tanques_compartidos','capacidad_tanques','aditivo_gasolina1','aditivo_gasolina2','aditivo_diesel'
	];
        public function relacion()
        {
            return $this->belongsTo(Estacion::class);
        }
        
}
