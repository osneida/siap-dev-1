<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_com extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personal_coms';

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
    protected $fillable = ['numero_revision', 'elaborado_por', 'revisado_por', 'cargo_elaborado', 'cargo_revisado', 'fecha_revision', 'fecha_creacion', 'estatus','nombre_apellido', 'nacimiento', 'sexo', 'estado_civil', 'foto', 'imss', 'curp', 'rfc', 'ine', 'codigo_postal', 'calle', 'numero_exterior', 'numero_interior', 'colonia', 'municipio', 'estado', 'celular', 'telefono_casa', 'email', 'c_nombre', 'c_celular', 'c_telefono', 'c_email', 'grado_instrucion', 'titulo', 'idiomas', 'user', 'pass'];

    
}
