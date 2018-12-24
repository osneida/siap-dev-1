<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estacion;

class EstacionConstitucionRepLegalController extends Controller
{
    //
    public function index()
    {

        $estacions = Estacion::all()->sortBy('id');
        //dd($estacions);
        //$id=1;
        $title = 'Listado de Estaciones (Constitución y Representación Legal)';       
        return view('estacionesConstitucionRepLegal.index',compact('title','estacions'));
    }

    public function show(Estacion $estacion)
    {
        return view('estacionesConstitucionRepLegal.show',compact('estacion'));
    }

    public function create()
    {
        return view('estacionesConstitucionRepLegal.create');
    }

    public function store(Estacion $estacion,Request $request)
    {
        $data = request()->validate([
            'nro_instrumento' => 'max:16',            
            'fecha_constitucion' => '',            
            'notario_constitucion' => 'max:32',            
            'ciudad_constitucion' => 'max:32',                        
            'fecha_emision_replegal' => '',            
            'nombre_replegal' => 'max:32',            
            'nro_inst_replegal' => 'max:16',            
            'fecha_replegal' => '',            
            'notario_replegal' => 'max:32',            
            'ciudad_replegal' => 'max:32',
            ],[
            'nro_instrumento.max' => 'El campo Nro. Instrumento debe tener como máximo 16 caracteres',            
            'fecha_constitucion.date' => 'El campo Fecha Constitución debe tener un formato de fécha válida',
            'notario_constitucion.max' => 'El campo Notario Constitución debe tener como máximo 32 caracteres',
            'ciudad_constitucion.max' => 'El campo Ciudad debe tener como máximo 32 caracteres',            
            'nombre_replegal.max' => 'El campo Representante Legal debe tener como máximo 32 caracteres',            
            'fecha_emision_replegal.date' => 'El campo Fecha de Emisión (Rep. Legal) debe tener un formato de fécha válida',
            'nro_inst_replegal.max' => 'El campo Nro. Instrumento (Repr. Legal) debe tener como máximo 16 caracteres',            
            'fecha_replegal.date' => 'El campo Fecha Representación debe tener un formato de fécha válida',            
            'notario_replegal.max' => 'El campo Notario (Rep. Legal) debe tener como máximo 32 caracteres',
            'ciudad_replegal.max' => 'El campo Ciudad (Rep. Legal) debe tener como máximo 32 caracteres',
        ]); 
        return redirect()->route('estacionesConstitucionRepLegal.index');
    }
    
    public function update(Estacion $estacion)
    {
         $data = request()->validate([
            'nro_instrumento' => 'max:16',            
            'fecha_constitucion' => '',            
            'notario_constitucion' => 'max:32',            
            'ciudad_constitucion' => 'max:32',                        
            'fecha_emision_replegal' => '',            
            'nombre_replegal' => 'max:32',            
            'nro_inst_replegal' => 'max:16',            
            'fecha_replegal' => '',            
            'notario_replegal' => 'max:32',            
            'ciudad_replegal' => 'max:32',
            ],[
            'nro_instrumento.max' => 'El campo Nro. Instrumento debe tener como máximo 16 caracteres',            
            'fecha_constitucion.date' => 'El campo Fecha Constitución debe tener un formato de fécha válida',
            'notario_constitucion.max' => 'El campo Notario Constitución debe tener como máximo 32 caracteres',
            'ciudad_constitucion.max' => 'El campo Ciudad debe tener como máximo 32 caracteres',            
            'nombre_replegal.max' => 'El campo Representante Legal debe tener como máximo 32 caracteres',            
            'fecha_emision_replegal.date' => 'El campo Fecha de Emisión (Rep. Legal) debe tener un formato de fécha válida',
            'nro_inst_replegal.max' => 'El campo Nro. Instrumento (Repr. Legal) debe tener como máximo 16 caracteres',            
            'fecha_replegal.date' => 'El campo Fecha Representación debe tener un formato de fécha válida',            
            'notario_replegal.max' => 'El campo Notario (Rep. Legal) debe tener como máximo 32 caracteres',
            'ciudad_replegal.max' => 'El campo Ciudad (Rep. Legal) debe tener como máximo 32 caracteres',
        ]);
        $post = $estacion->update($data);
        return redirect()->route('estacionesConstitucionRepLegal.show',['estacion'=>$estacion]);
    }
    
    public function edit(Estacion $estacion)
    {
        return view('estacionesConstitucionRepLegal.edit',compact('estacion'));
    }        
}
