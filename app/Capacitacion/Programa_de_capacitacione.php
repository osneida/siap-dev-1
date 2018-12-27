<?php

namespace App\Capacitacion;

use Illuminate\Database\Eloquent\Model;

class Programa_de_capacitacione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'programa_de_capacitaciones';

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
    protected $fillable = ['nombre_trabajador', 'periodo_ejecucion', 'cargo_trabajador', 'objetivo_programa', 'elaborado_por', 'firma_elaborado', 'aprobado_por', 'firma_aprobado', 'obsevaciones'];

    
}
