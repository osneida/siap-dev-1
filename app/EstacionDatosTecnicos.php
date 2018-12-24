<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstacionDatosTecnicos extends Model
{
	protected $fillable = [
	'numero_islas','numero_despachadores','numero_empleados','fecha_inicio_operacion',
	'estatus_estacion','responsable_obra_diseno','numero_permiso_diseno','forma_recepcion',
	'promedio_mensual_ventas','tienda_conveniencias','cobro_uso_banos'
	];
        public function relacion()
        {
            return $this->belongsTo(Estacion::class);
        }
        
}
