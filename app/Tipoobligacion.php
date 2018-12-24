<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoobligacion extends Model
{
    protected $fillable = [
        'codigo','nombre','descripcion','estatus'
    ];    
}
