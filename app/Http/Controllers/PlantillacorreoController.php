<?php

namespace App\Http\Controllers;

use App\Plantillacorreo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlantillacorreoController extends Controller
{
    public function index()
    {
        
        $plantillacorreos = Plantillacorreo::all()->sortByDesc('updated_at');
        $memo = 'Cuerpo de mensajes configurados para el envío de Correo Electrónico al Clientes por Comercialización';       
        return view('plantillacorreos.index',compact('memo','plantillacorreos'));
    }

    public function show(Plantillacorreo $plantillacorreo)
    {
        return view('plantillacorreos.show',compact('plantillacorreo'));
    }

    public function create()
    {
        return view('plantillacorreos.create');
    }

    public function store()
    {
        
        $data = request()->validate([
            'memo' => 'required',
            'user' => ''
        ],[
            'memo.required' => 'El campo de Texto es obligatorio' 
        ]);

        Plantillacorreo::create([
            'memo' =>$data['memo'],
            'user' =>$data['user'], //ESTO HAY QUE MEJORARLO CON EL USUARIO DEL SISTEMA
        ]);
        return redirect()->route('plantillacorreos.index');
    }
    public function edit(Plantillacorreo $plantillacorreo)
    {
        return view('plantillacorreos.edit',['plantillacorreo'=>$plantillacorreo]);
    }   
    
    public function update(Plantillacorreo $plantillacorreo)
    {       
        $data = request()->validate([
            'memo' => 'required',
            'user' => '',
        ]);
        
        $plantillacorreo->update($data);
        return redirect()->route('plantillacorreos.show',['plantillacorreo'=>$plantillacorreo]);
    }  
    function destroy(Plantillacorreo $plantillacorreo)
    {
        $plantillacorreo->delete();
        return redirect()->route('plantillacorreos.index');
    }      
}
