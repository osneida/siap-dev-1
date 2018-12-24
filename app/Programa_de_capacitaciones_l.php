<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa_de_capacitaciones_l extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'programa_de_capacitaciones_ls';

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
    protected $fillable = ['id_programa', 'nombre_capacitacion', 'tipo_accion', 'capacitacion_int', 'capacitacion_ext', 'contenido', 'costo_aproximado', 'mecanismo_medicion', 'requisito', 'duracion_curso'];

    
}
