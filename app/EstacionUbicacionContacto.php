<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstacionUbicacionContacto extends Model
{
	protected $fillable = [
	'calle','colonia','codigo_postal','estado_id','municipio_id','entidad_federal_id','referencia1','referencia2','telefono1','telefono2',
	'celular1','celular2','email_estacion','sitioweb'
	];
        
        public function profile()
        {
            return $this->hasMany(Tanque::class);
        }
        
}
