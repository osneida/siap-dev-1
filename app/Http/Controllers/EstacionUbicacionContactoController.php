<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estacion;
use App\Estado;

class EstacionUbicacionContactoController extends Controller
{
    //
    public function index()
    {

        $estacions = Estacion::all()->sortBy('id');
        //dd($estacions);
        //$id=1;
        $title = 'Listado de Estaciones (Ubicación y Contacto)';       
        return view('estacionesUbicacionContacto.index',compact('title','estacions'));
    }

    public function show(Estacion $estacion)
    {
        $estado = Estado::where('id', $estacion->estado_id)->first(); 
        return view('estacionesUbicacionContacto.show',compact('estacion','estado'));
    }

    public function create()
    {
        $estados = Estado::all()->sortBy('id');
        return view('estacionesUbicacionContacto.create',['estados'=>$estados]);
    }

    public function store(Estacion $estacion,Request $request)
    {
        $data = request()->validate([
            'estado_id' => 'max:32',            
            'municipio_id' => 'max:32',            
            'entidad_federal_id' => 'max:32',
            'calle' => 'max:64',            
            'colonia' => 'max:32',                        
            'codigo_postal' => 'max:5',                        
            'referencia1' => 'max:128',            
            'referencia2' => 'max:128',                        
            'telefono1' => 'max:16',            
            'telefono2' => 'max:16',                        
            'celular1' => 'max:16',            
            'celular2' => 'max:16',            
            //'email_estacion' => ['max:32','email'], //REVISAR           
            'email_estacion' => 'max:32',            
            'sitioweb' => 'max:32',            
        ],[
            'estado_id.max' => 'El campo Estado debe tener como máximo 32 caracteres',
            'municipio_id.max' => 'El campo Municipio debe tener como máximo 32 caracteres',
            'entidad_federal_id.max' => 'El campo Entidad Federal debe tener como máximo 32 caracteres',
            'calle.max' => 'El campo Calle debe tener como máximo 64 caracteres',
            'colonia.max' => 'El campo Colonia debe tener como máximo 32 caracteres',            
            'codigo_postal.max' => 'El campo Cód.Postal debe tener como máximo 5 caracteres',            
            'referencia1.max' => 'El campo Referencia Dirección 1 debe tener como máximo 128 caracteres',            
            'referencia2.max' => 'El campo Referencia Dirección 2 debe tener como máximo 128 caracteres',                        
            'telefono1.max' => 'El campo Nro. Teléfono 1 debe tener como máximo 16 caracteres',            
            'telefono2.max' => 'El campo Nro. Teléfono 2 debe tener como máximo 16 caracteres',                        
            'celular1.max' => 'El campo Nro. Celular 1 debe tener como máximo 16 caracteres',            
            'celular2.max' => 'El campo Nro. Celular 2 debe tener como máximo 16 caracteres',                        
            'celular2.max' => 'El campo Nro. Celular 2 debe tener como máximo 16 caracteres',                                    
            //'email_estacion.email' => 'El campo Correo Electrónico de la Estación deberá ser una dirección de correo electrónico válida',
            'email_estacion.max' => 'El campo Correo Electrónico de la Estación debe tener un máximo de 32 caracteres',
            'sitioweb.max' => 'El campo Sitio Web de la Estación debe tener como máximo 32 caracteres',
        ]); 
        return redirect()->route('estacionesUbicacionContacto.index');
    }
    
    public function update(Estacion $estacion)
    {
        $data = request()->validate([
            'estado_id' => 'max:32',
            'municipio_id' => 'max:32',
            'entidad_federal_id' => 'max:32',
            'calle' => 'max:64',
            'colonia' => 'max:32',
            'codigo_postal' => 'max:5',
            'referencia1' => 'max:128',
            'referencia2' => 'max:128',
            'telefono1' => 'max:16',
            'telefono2' => 'max:16',
            'celular1' => 'max:16',
            'celular2' => 'max:16',
            //'email_estacion' => ['max:32','email'], //REVISAR
            'email_estacion' => 'max:32',
            'sitioweb' => 'max:32',
        ],[
            'estado_id.required' => 'El c',
            'estado_id.max' => 'El campo Estado debe tener como máximo 32 caracteres',
            'municipio_id.max' => 'El campo Municipio debe tener como máximo 32 caracteres',
            'entidad_federal_id.max' => 'El campo Entidad Federal debe tener como máximo 32 caracteres',
            'calle.max' => 'El campo Calle debe tener como máximo 64 caracteres',
            'colonia.max' => 'El campo Colonia debe tener como máximo 32 caracteres',
            'codigo_postal.max' => 'El campo Cód.Postal debe tener como máximo 5 caracteres',
            'referencia1.max' => 'El campo Referencia Dirección 1 debe tener como máximo 128 caracteres',
            'referencia2.max' => 'El campo Referencia Dirección 2 debe tener como máximo 128 caracteres',
            'telefono1.max' => 'El campo Nro. Teléfono 1 debe tener como máximo 16 caracteres',
            'telefono2.max' => 'El campo Nro. Teléfono 2 debe tener como máximo 16 caracteres',
            'celular1.max' => 'El campo Nro. Celular 1 debe tener como máximo 16 caracteres',
            'celular2.max' => 'El campo Nro. Celular 2 debe tener como máximo 16 caracteres',
            'celular2.max' => 'El campo Nro. Celular 2 debe tener como máximo 16 caracteres',
            //'email_estacion.email' => 'El campo Correo Electrónico de la Estación deberá ser una dirección de correo electrónico válida',
            'email_estacion.max' => 'El campo Correo Electrónico de la Estación debe tener un máximo de 32 caracteres',
            'sitioweb.max' => 'El campo Sitio Web de la Estación debe tener como máximo 32 caracteres',
        ]);
        $post = $estacion->update($data);
        return redirect()->route('estacionesUbicacionContacto.show',['estacion'=>$estacion]);
    }
    
    public function edit(Estacion $estacion)
    {
        $estados = Estado::all()->sortBy('id');        
        $id_estado = $estacion->estado_id;
        return view('estacionesUbicacionContacto.edit',compact('estacion','estados','id_estado'));
    }        
}
