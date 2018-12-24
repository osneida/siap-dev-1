<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aspecto_familiar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'aspecto_familiars';

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
    protected $fillable = ['id_personal','parentesco', 'nombre', 'edad', 'ocupacion', 'domicilio'];

    
}
