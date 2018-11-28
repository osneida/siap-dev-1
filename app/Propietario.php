<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $fillable = [
        'codigo','nombre','apellido_paterno','apellido_materno','email','direccion','telefono1','telefono2','celular1','celular2','fecha_baja','estatus'
    ];    
}
