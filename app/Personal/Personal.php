<?php

namespace App\Personal;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personals';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_apellido', 'nacimiento', 'sexo', 'estado_civil', 'foto', 'imss', 'curp', 'rfc', 'ine', 'codigo_postal', 'calle', 'numero_exterior', 'numero_interior', 'colonia', 'municipio', 'estado', 'celular', 'telefono_casa', 'email', 'c_nombre', 'c_celular', 'c_telefono', 'c_email', 'grado_instrucion', 'titulo', 'idiomas'];

    
}
