<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acta_confidencial extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'acta_confidencials';

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
    protected $fillable = ['numero_revision', 'elaborado_por', 'revisado_por', 'cargo_elaborado', 'cargo_revisado', 'fecha_revision', 'fecha_creacion', 'estatus','numero', 'codigo_documento', 'nombre_documento', 'numero_revision', 'nombre_responsable', 'firma_responsable', 'fecha_entrega', 'tipo_documento'];

    
}
