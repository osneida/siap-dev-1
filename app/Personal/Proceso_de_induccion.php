<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso_de_induccion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proceso_de_induccions';

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
    protected $fillable = ['fecha_de_inicio', 'fecha_de_finalizacion', 'personal_en_induccion', 'puesto_a', 'personal_responsable', 'puesto_b', 'actividades_a_realizar', 'documento_asociado', 'nombre_del_trabajador', 'nombre_del_capacitador'];

    
}
