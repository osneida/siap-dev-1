<?php

namespace App\Http\Controllers;

use App\{Estacion,Tanque};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstacionTanquesController extends Controller
{
    //
    public function index()
    {

        $estacions = Estacion::all()->sortBy('id');
        //dd($estacions->first());
        //$tanques = Tanque::where('estacion_id',$estacions->first()->id)->firstOrFail();        
        //dd($tanques);
        //$id=1;
        $title = 'Listado de Estaciones (Tanques)';       
        return view('estacionesTanques.index',compact('title','estacions','tanques'));
    }

    public function show(Estacion $estacion)
    {
        $tanque = Tanque::where('estacion_id', $estacion->id)->get();
        return view('estacionesTanques.show',compact('estacion','tanque'));
    }

    public function create()
    {
        return view('estacionesTanques.create');
    }

    public function store(Estacion $estacion,Request $request)
    {
        $data2 = request()->validate([
            'nro_tanques_individuales' => 'integer',
            'nro_tanques_compartidos' => 'integer',
            'capacidad_tanques' => 'integer',
            'aditivo_gasolina1' => 'max:32',
            'aditivo_gasolina2' => 'max:32',
            'aditivo_diesel' => 'max:32',                       
         ],[
            'nro_tanques_individuales.integer' => 'El campo Tanques Individuales debe ser un número entero',
            'nro_tanques_compartidos.integer' => 'El campo Tanques Compartidos debe ser un número entero',
            'capacidad_tanques.integer' => 'El campo Capacidad de Tanques debe ser un número entero',
            'aditivo_gasolina1.max' => 'El campo Aditivo Gasolina 1 debe tener como máximo 32 caracteres',
            'aditivo_gasolina2.max' => 'El campo Aditivo Gasolina 2 debe tener como máximo 32 caracteres',
            'aditivo_diesel.max' => 'El campo Aditivo Diesel debe tener como máximo 32 caracteres',             
        ]);        
        $post = Estacion::profile()->create([
            'nro_tanques_individuales' => $data2['nro_tanques_individuales'],
            'nro_tanques_compartidos' => $data2['nro_tanques_compartidos'],
            'capacidad_tanques' => $data2['capacidad_tanques'],
            'aditivo_gasolina1' => $data2['aditivo_gasolina1'],
            'aditivo_gasolina2' => $data2['aditivo_gasolina2'],
            'aditivo_diesel' => $data2['aditivo_diesel'],
        ]);       
        return redirect()->route('estacionesTanques.index');
    }
    
    public function update(Estacion $estacion)
    {
        $data2 = request()->validate([
            'nro_tanques_individuales' => 'integer',
            'nro_tanques_compartidos' => 'integer',
            'capacidad_tanques' => 'integer',
            'aditivo_gasolina1' => 'max:32',
            'aditivo_gasolina2' => 'max:32',
            'aditivo_diesel' => 'max:32',
        ],[
            'nro_tanques_individuales.integer' => 'El campo Tanques Individuales debe ser un número entero',
            'nro_tanques_compartidos.integer' => 'El campo Tanques Compartidos debe ser un número entero',
            'capacidad_tanques.integer' => 'El campo Capacidad de Tanques debe ser un número entero',
            'aditivo_gasolina1.max' => 'El campo Aditivo Gasolina 1 debe tener como máximo 32 caracteres',
            'aditivo_gasolina2.max' => 'El campo Aditivo Gasolina 2 debe tener como máximo 32 caracteres',
            'aditivo_diesel.max' => 'El campo Aditivo Diesel debe tener como máximo 32 caracteres',
        ]);
        
        $data2['estacion_id']=$estacion->id;                
        
        $tanque = Tanque::where('estacion_id', $estacion->id)->count();
        $post='';
        if($tanque>0) {
            $tanque = Tanque::where('estacion_id', $estacion->id)->first();
            $data2['id']=$tanque->id;        
            $post = $tanque->update($data2);            
        }
        if(!$post){        
            Tanque::create([
            'estacion_id' =>$estacion->id,
            'nro_tanques_individuales' => $data2['nro_tanques_individuales'],
            'nro_tanques_compartidos' => $data2['nro_tanques_compartidos'],
            'capacidad_tanques' => $data2['capacidad_tanques'],
            'aditivo_gasolina1' => $data2['aditivo_gasolina1'],
            'aditivo_gasolina2' => $data2['aditivo_gasolina2'],
            'aditivo_diesel' => $data2['aditivo_diesel'],
            'aditivo_diesel' => $data2['aditivo_diesel'],
            ]);
        }
        return redirect()->route('estacionesTanques.show',['estacion'=>$estacion]);
    }
    
    public function edit(Estacion $estacion)
    {
        //dd($estacion);
        $tanques = Tanque::where('estacion_id', $estacion->id)->first();
        //dd($tanque);
        return view('estacionesTanques.edit',compact('estacion','tanques'));
    }        
}
