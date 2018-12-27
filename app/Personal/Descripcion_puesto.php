<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descripcion_puesto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'descripcion_puestos';

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
    protected $fillable = ['numero_revision', 'elaborado_por', 'revisado_por', 'cargo_elaborado', 'cargo_revisado', 'fecha_revision', 'fecha_creacion', 'estatus','nombre_puesto', 'supervisor_inmediato', 'nivel_autoridad', 'funciones_responsabilidad', 'actividades', 'nivel_academico', 'formacion', 'experiencia', 'competencias', 'habilidades', 'aprobado_por', 'recibido_por', 'firma_aprobado', 'firma_recibido'];

    
}
