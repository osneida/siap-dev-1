<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstacionInstalaciones extends Model
{
	protected $fillable = [
	'numero_islas','numero_despachadores','numero_empleados','fecha_inicio_operacion',
	'estatus_estacion','responsable_obra_diseno','numero_permiso_diseno','forma_recepcion',
	'promedio_mensual_ventas','tienda_conveniencias','cobro_uso_banos',            
	'superficie_total_predio','superficie_construccion','numero_pisos','escaleras','cuarto_electrico','cuarto_sucio','cuarto_maquinas','bodega','planta_electrica','compresor',
        'hidroneumaticos','numero_banos','puestos_estacionamiento','puestos_estacionamiento_disc','cisterna_aguas_blancas','extintores','area_facturacion',
        'surtidor_aire','surtidor_agua'
	];
}
