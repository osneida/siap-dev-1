<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estacion;
class EstacionInstalacionesController extends Controller
{
    public function index()
    {
        $estacions = Estacion::all()->sortBy('id');
        $title = 'Listado de Estaciones (Instalaciones)';       
        return view('estacionesInstalaciones.index',compact('title','estacions'));
    }

    public function show(Estacion $estacion)
    {
        return view('estacionesInstalaciones.show',compact('estacion'));
    }

    public function create()
    {
        return view('estacionesInstalaciones.create');
    }

    public function store(Estacion $estacion,Request $request)
    {        
        $data = request()->validate([
            'numero_islas' => 'integer',
            'numero_despachadores' => '',//VALIDAR
            'numero_permiso_diseno' => 'max:16',            
            'forma_recepcion' => 'max:16',           
            'numero_empleados' => '',//VALIDAR            
            'fecha_inicio_operacion' => '',//VALIDAR
            'estatus_estacion' => '',//VALIDAR
            'responsable_obra_diseno' => 'max:64',            
            'promedio_mensual_ventas' => 'integer',
            'tienda_conveniencias' => 'boolean',
            'cobro_uso_banos' => 'boolean',            
            'superficie_total_predio' => '',//VALIDAR
            'superficie_construccion' => '',//VALIDAR
            'numero_pisos' => '',//VALIDAR
            'escaleras' => '',//VALIDAR
            'cuarto_electrico' => 'boolean',
            'cuarto_sucio' => 'boolean',
            'cuarto_maquinas' => 'boolean',
            'bodega' => '',//VALIDAR 
            'planta_electrica' => '',//VALIDAR
            'compresor' => '',//VALIDAR
            'hidroneumaticos' => '',//VALIDAR
            'numero_banos' => '',//VALIDAR
            'puestos_estacionamiento' => '',//VALIDAR
            'puestos_estacionamiento_disc' => '',//VALIDAR
            'cisterna_aguas_blancas' => 'boolean',
            'extintores' => '',//VALIDAR
            'area_facturacion' => 'boolean',
            'surtidor_aire' => '',//VALIDAR
            'surtidor_agua' => '',//VALIDAR
            ],[
            'numero_islas.integer' => 'El campo Islas debe ser un número entero',
            'numero_despachadores.integer' => 'El campo Despachadores debe ser un número entero',            
            'numero_permiso_diseno.max' => 'El campo Nro. del Permiso para la Obra en Diseño debe tener como máximo 16 caracteres',
            'forma_recepcion.max' => 'El campo Forma Recepción debe tener como máximo 16 caracteres',             
            'numero_empleados.integer' => 'El campo Empleados debe ser un número entero',
            'fecha_inicio_operacion.date' => 'El campo Fecha de Inicio de la Operación debe tener un formato de fécha válida',            
            'estatus_estacion.integer' => 'El campo Estatus Estación debe ser un número entero',
            'responsable_obra_diseno.max' => 'El campo Responsable de la Obra en Diseño debe tener como máximo 64 caracteres',
            'promedio_mensual_ventas.integer' => 'El campo Promedio Mensual de Ventas en Litros debe ser un número entero',
            'tienda_conveniencias.boolean' => 'El campo Tienda Conveniencias debe ser en formato Si/No',
            'cobro_uso_banos.boolean' => 'El campo Cobro del Uso de Baños debe ser en formato Si/No',                
            'superficie_total_predio.integer' => 'El campo Superficie Total de Predio debe ser un número entero',
            'superficie_construccion.integer' => 'El campo Superficie de Construcción de Predio debe ser un número entero',
            'numero_pisos.integer' => 'El campo Pisos debe ser un número entero',
            'escaleras.integer' => 'El campo Escaleras debe ser un número entero',
            'bodega.integer' => 'El campo Bodega debe ser un número entero',
            'hidroneumaticos.integer' => 'El campo Hidroneumáticos debe ser un número entero',            
            'cuarto_electrico.boolean' => 'El campo Cuarto Eléctrico debe ser en formato Si/No',
            'cuarto_sucio.boolean' => 'El campo Cuarto Sucio debe ser en formato Si/No',
            'cuarto_maquinas.boolean' => 'El campo Cuarto Máquinas debe ser en formato Si/No',
            'planta_electrica.integer' => 'El campo Planta Eléctrica debe ser un número entero',
            'compresor.integer' => 'El campo Compresor debe ser un número entero',
            'numero_banos.integer' => 'El campo Baños debe ser un número entero',
            'puestos_estacionamiento.integer' => 'El campo Puestos de Estacionamiento debe ser un número entero',
            'puestos_estacionamiento_disc.integer' => 'El campo Estacionamiento (Discapacitados) debe ser un número entero',  
            'cisterna_aguas_blancas.boolean' => 'El campo Cisterna Aguas Blancas debe ser en formato Si/No',
            'extintores.integer' => 'El campo Extintores debe ser un número entero',
            'area_facturacion.boolean' => 'El campo Área de Facturación debe ser en formato Si/No',            
            'surtidor_aire.integer' => 'El campo Surtidor de Aire debe ser un número entero',
            'surtidor_agua.integer' => 'El campo Surtidor de Agua debe ser un número entero',            
        ]); 
        return redirect()->route('estacionesInstalaciones.index');
    }
    
    public function update(Estacion $estacion)
    {
        $data = request()->validate([
            'numero_islas' => 'integer',
            'numero_despachadores' => '',//VALIDAR
            'numero_permiso_diseno' => 'max:16',            
            'forma_recepcion' => 'max:16',           
            'numero_empleados' => '',//VALIDAR            
            'fecha_inicio_operacion' => '',//VALIDAR
            'estatus_estacion' => '',//VALIDAR
            'responsable_obra_diseno' => 'max:64',            
            'promedio_mensual_ventas' => 'integer',
            'tienda_conveniencias' => 'boolean',
            'cobro_uso_banos' => 'boolean',            
            'superficie_total_predio' => '',//VALIDAR
            'superficie_construccion' => '',//VALIDAR
            'numero_pisos' => '',//VALIDAR
            'escaleras' => '',//VALIDAR
            'cuarto_electrico' => 'boolean',
            'cuarto_sucio' => 'boolean',
            'cuarto_maquinas' => 'boolean',
            'bodega' => '',//VALIDAR 
            'planta_electrica' => '',//VALIDAR
            'compresor' => '',//VALIDAR
            'hidroneumaticos' => '',//VALIDAR
            'numero_banos' => '',//VALIDAR
            'puestos_estacionamiento' => '',//VALIDAR
            'puestos_estacionamiento_disc' => '',//VALIDAR
            'cisterna_aguas_blancas' => 'boolean',
            'extintores' => '',//VALIDAR
            'area_facturacion' => 'boolean',
            'surtidor_aire' => '',//VALIDAR
            'surtidor_agua' => '',//VALIDAR
             ],[
            'numero_islas.integer' => 'El campo Islas debe ser un número entero',
            'numero_despachadores.integer' => 'El campo Despachadores debe ser un número entero',            
            'numero_permiso_diseno.max' => 'El campo Nro. del Permiso para la Obra en Diseño debe tener como máximo 16 caracteres',
            'forma_recepcion.max' => 'El campo Forma Recepción debe tener como máximo 16 caracteres',             
            'numero_empleados.integer' => 'El campo Empleados debe ser un número entero',
            'fecha_inicio_operacion.date' => 'El campo Fecha de Inicio de la Operación debe tener un formato de fécha válida',            
            'estatus_estacion.integer' => 'El campo Estatus Estación debe ser un número entero',
            'responsable_obra_diseno.max' => 'El campo Responsable de la Obra en Diseño debe tener como máximo 64 caracteres',
            'promedio_mensual_ventas.integer' => 'El campo Promedio Mensual de Ventas en Litros debe ser un número entero',
            'tienda_conveniencias.boolean' => 'El campo Tienda Conveniencias debe ser en formato Si/No',
            'cobro_uso_banos.boolean' => 'El campo Cobro del Uso de Baños debe ser en formato Si/No',                
            'superficie_total_predio.integer' => 'El campo Superficie Total de Predio debe ser un número entero',
            'superficie_construccion.integer' => 'El campo Superficie de Construcción de Predio debe ser un número entero',
            'numero_pisos.integer' => 'El campo Pisos debe ser un número entero',
            'escaleras.integer' => 'El campo Escaleras debe ser un número entero',
            'bodega.integer' => 'El campo Bodega debe ser un número entero',
            'hidroneumaticos.integer' => 'El campo Hidroneumáticos debe ser un número entero',            
            'cuarto_electrico.boolean' => 'El campo Cuarto Eléctrico debe ser en formato Si/No',
            'cuarto_sucio.boolean' => 'El campo Cuarto Sucio debe ser en formato Si/No',
            'cuarto_maquinas.boolean' => 'El campo Cuarto Máquinas debe ser en formato Si/No',
            'planta_electrica.integer' => 'El campo Planta Eléctrica debe ser un número entero',
            'compresor.integer' => 'El campo Compresor debe ser un número entero',
            'numero_banos.integer' => 'El campo Baños debe ser un número entero',
            'puestos_estacionamiento.integer' => 'El campo Puestos de Estacionamiento debe ser un número entero',
            'puestos_estacionamiento_disc.integer' => 'El campo Estacionamiento (Discapacitados) debe ser un número entero',  
            'cisterna_aguas_blancas.boolean' => 'El campo Cisterna Aguas Blancas debe ser en formato Si/No',
            'extintores.integer' => 'El campo Extintores debe ser un número entero',
            'area_facturacion.boolean' => 'El campo Área de Facturación debe ser en formato Si/No',            
            'surtidor_aire.integer' => 'El campo Surtidor de Aire debe ser un número entero',
            'surtidor_agua.integer' => 'El campo Surtidor de Agua debe ser un número entero',  
        ]);
        $post = $estacion->update($data);
        return redirect()->route('estacionesInstalaciones.show',['estacion'=>$estacion]);
    }
    
    public function edit(Estacion $estacion)
    {
        return view('estacionesInstalaciones.edit',compact('estacion'));
    }
}
