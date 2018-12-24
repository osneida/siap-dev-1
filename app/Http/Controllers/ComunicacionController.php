<?php

namespace App\Http\Controllers;

use App\Comunicacion;
use App\Estacion;
use Illuminate\Http\Request;

class ComunicacionController extends Controller
{

    public function index()
    {
        $comunicacions = Comunicacion::all()->sortBy('id');
        $title = 'Comunicaciones';       
        return view('comunicaciones.index',compact('title','comunicacions'));
    }


    public function create()
    {
      //lleva las estaciones para mostrar los datos 
      $estaciones = Estacion::get(); 
      $titulo='Matriz de Comunicación Interna y Externa';
      $documentoGenera='ES-PG-003';
      $codigoformato='ES-FG-005';
      return view('comunicaciones.create', compact('estaciones', 'titulo','documentoGenera','codigoformato'));
    }

   public function store(Request $request)
    {

        $comunicaciones = Comunicacion::create($request->all());
        return redirect()->route('comunicaciones.index');

    }

    public function show(Comunicacion $comunicacion)
    {
        $estaciones = Estacion::get(); 
        $show=true;
        $edit=false; 
     	  $titulo='Matriz de Comunicación Interna y Externa';
        $documentoGenera='ES-PG-003';
        $codigoformato='ES-FG-005';
        return view('comunicaciones.show',compact('estaciones',  'comunicacion','show','edit','titulo','documentoGenera','codigoformato'));
    }


    public function edit(Comunicacion $comunicacion)
    {
       $estaciones = Estacion::get(); 
       $show=false;
       $edit=true; 
       $titulo='Matriz de Comunicación Interna y Externa';
       $documentoGenera='ES-PG-003';
       $codigoformato='ES-FG-005';  
       return view('comunicaciones.edit',compact('estaciones', 'comunicacion','show','edit','titulo','documentoGenera','codigoformato'));
    }

    public function update(Request $request, Comunicacion $comunicacion)
    {

        $comunicacion->update($request->all());
        return redirect()->route('comunicaciones.index',$comunicacion->id);
    }

    function destroy(Comunicacion $comunicacion)
    {
        $comunicacion->delete();
        return redirect()->route('comunicaciones.index');
    }
}
