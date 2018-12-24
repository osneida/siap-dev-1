<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $fillable = [
        'codigo','nombre','apellido_paterno','apellido_materno','email','estacion','fecha_baja','fecha_primer_envio_correo','fecha_ultimo_envio_correo','estatus','chk_email[]'
    ];
    /*public function setActivoAttribute($value)
    {
        $this->attributes['activo'] = ($value == 'on') ? '1' : '0';
    }*/  
    
}