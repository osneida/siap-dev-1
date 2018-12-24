<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
     protected $fillable = [
        'nombre_riesgo','id_tipo_riesgo'
    ]; 
}
