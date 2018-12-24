<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class head_documento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'head_documentos';

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
    protected $fillable = ['numero_revision', 'elaborado_por', 'revisado_por', 'cargo_elaborado', 'cargo_revisado', 'fecha_revision', 'fecha_creacion', 'estatus'];

    
}
