<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proceso_induccion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proceso_induccions';

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
    protected $fillable = ['numero_revision', 'elaborado_por', 'revisado_por', 'cargo_elaborado', 'cargo_revisado', 'fecha_revision', 'fecha_creacion', 'estatus','fecha_inicio', 'fecha_finalizacion', 'personal_en_induccion', 'puesto_induccion', 'personal_responsable', 'puesto_responsable', 'motivo', 'especifique', 'actividades', 'documento_asociado', 'firma_trabajador', 'firma_capacitador'];

    
}
