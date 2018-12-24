<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'name','codigo','id_perfil','estatus'
    ];
    public function nombre_perfil()
	{
		return $this->hasOne('App\Perfil', 'id', 'id_perfil');
	}

	public function perfil(){
     return $this->belongsTo('App\Perfil', 'id_perfil');
	}
}
