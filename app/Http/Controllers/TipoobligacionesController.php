<?php

namespace App\Http\Controllers;

use App\Tipoobligacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoobligacionesController extends Controller
{
    public function index()
    {
        $tipoobligaciones = Tipoobligacion::all()->sortBy('id');
        $title = 'Tipos de Obligaciones';       
        return view('tipoobligaciones.index',compact('title','tipoobligaciones'));
    }

    public function show(Tipoobligacion $tipoobligacion)
    {
        return view('tipoobligaciones.show',compact('tipoobligacion'));
    }

    public function create()
    {
        return view('tipoobligaciones.create');
    }

    public function store()
    {
        
        $data = request()->validate([
        	'codigo' => 'required',
            'nombre' => 'required|max:32',
            'descripcion' => 'required|max:64',
            'estatus' => '',
        ],[
            'codigo.required' => 'El campo Código es obligatorio',
            'nombre.required' => 'El campo Nombre es obligatorio',
            'descripcion.required' => 'El campo Descripcion es obligatorio',
        ]);

        Tipoobligacion::create([
            'codigo' => $data['codigo'],
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'estatus' => $data['estatus'],
        ]);
        return redirect()->route('tipoobligaciones.index');
    }
    public function edit(Tipoobligacion $tipoobligacion)
    {
        return view('tipoobligaciones.edit',['tipoobligacion'=>$tipoobligacion]);
    }   
    
    public function update(Tipoobligacion $tipoobligacion)
    {       
        $data = request()->validate([
        	'codigo' => 'required',
            'nombre' => 'required|max:32',
            'descripcion' => 'required|max:64',
            'estatus' => '',
        ],[
            'codigo.required' => 'El campo Código es obligatorio',
            'nombre.required' => 'El campo Nombre es obligatorio',
            'descripcion.required' => 'El campo Descripcion es obligatorio',
        ]);
        
        $tipoobligacion->update($data);
        return redirect()->route('tipoobligaciones.show',['tipoobligacion'=>$tipoobligacion]);
    }  
    function destroy(Tipoobligacion $tipoobligacion)
    {
        $tipoobligacion->delete();
        return redirect()->route('tipoobligaciones.index');
    }      
}
