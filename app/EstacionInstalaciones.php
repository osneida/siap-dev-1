<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstacionInstalaciones extends Model
{
	protected $fillable = [
	'superficie_total_predio',
        'superficie_construccion','numero_pisos','escaleras','cuarto_electrico','cuarto_sucio','cuarto_maquinas','bodega','planta_electrica','compresor',
        'hidroneumaticos','numero_banos','puestos_estacionamiento','puestos_estacionamiento_disc','cisterna_aguas_blancas','extintores','area_facturacion',
        'surtidor_aire','surtidor_agua'
	];
}
