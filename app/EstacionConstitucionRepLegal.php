<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstacionConstitucionRepLegal extends Model
{
	protected $fillable = [
	'nro_instrumento','fecha_constitucion','notario_constitucion','ciudad_constitucion',
	'fecha_emision_replegal','nombre_replegal','nro_inst_replegal','fecha_replegal','notario_replegal','ciudad_replegal'
	];
        public function profile()
        {
            return $this->hasMany(Tanque::class);
        }
        
}
