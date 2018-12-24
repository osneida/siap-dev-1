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
            'superficie_total_predio' => 'integer',//REVISAR 
            'superficie_construccion' => 'integer',//REVISAR 
            'numero_pisos' => 'integer',//REVISAR 
            'escaleras' => 'integer',//REVISAR 
            'cuarto_electrico' => 'boolean',//REVISAR 
            'cuarto_sucio' => 'boolean',//REVISAR 
            'cuarto_maquinas' => 'boolean',//REVISAR 
            'bodega' => 'integer',//REVISAR 
            'planta_electrica' => 'integer',//REVISAR 
            'compresor' => 'integer',//REVISAR 
            'hidroneumaticos' => 'integer',//REVISAR 
            'numero_banos' => 'integer',//REVISAR 
            'puestos_estacionamiento' => 'integer',//REVISAR 
            'puestos_estacionamiento_disc' => 'integer',//REVISAR 
            'cisterna_aguas_blancas' => 'boolean',//REVISAR 
            'extintores' => 'integer',//REVISAR 
            'area_facturacion' => 'boolean',//REVISAR 
            'surtidor_aire' => 'integer',//REVISAR 
            'surtidor_agua' => 'integer',            //REVISAR 
            ],[
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
            'superficie_total_predio' => '',//REVISAR 
            'superficie_construccion' => '',//REVISAR 
            'numero_pisos' => '',//REVISAR 
            'escaleras' => '',//REVISAR 
            'cuarto_electrico' => 'boolean',//REVISAR 
            'cuarto_sucio' => 'boolean',//REVISAR 
            'cuarto_maquinas' => 'boolean',//REVISAR 
            'bodega' => '',//REVISAR 
            'planta_electrica' => '',//REVISAR 
            'compresor' => '',//REVISAR 
            'hidroneumaticos' => '',//REVISAR 
            'numero_banos' => '',//REVISAR 
            'puestos_estacionamiento' => '',//REVISAR 
            'puestos_estacionamiento_disc' => '',//REVISAR 
            'cisterna_aguas_blancas' => 'boolean',//REVISAR 
            'extintores' => '',//REVISAR 
            'area_facturacion' => 'boolean',//REVISAR 
            'surtidor_aire' => '',//REVISAR 
            'surtidor_agua' => '',            //REVISAR 
            ],[
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
