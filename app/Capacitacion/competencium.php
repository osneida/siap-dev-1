<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class competencium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'competencias';

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
    protected $fillable = ['numero_revision', 'elaborado_por', 'revisado_por', 'cargo_elaborado', 'cargo_revisado', 'fecha_revision', 'fecha_creacion', 'estatus', 'objectivo', 'alcance', 'definicion', 'responsabilidades', 'descripcion_actividades', 'registros', 'referencias_internas', 'referencias_externas', 'control_cambio'];

    
}
