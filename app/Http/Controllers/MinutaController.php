<?php

namespace App\Http\Controllers;

use App\Minuta;
use App\Estacion;
use Illuminate\Http\Request;

class MinutaController extends Controller
{

    public function index()
    {
        $minutas = Minuta::all()->sortBy('id');
        $title = 'Minutas';       
        return view('minutas.index',compact('title','minutas'));
    }


    public function create()
    {
   	  //lleva las estaciones para mostrar los datos 
      $estaciones = Estacion::get(); 
      $titulo='Minuta de Junta del Sistema Integral de Administración en Petrolíferos';
      $documentoGenera='ES-PG-002';
      $codigoformato='ES-FG-003';
      return view('minutas.create', compact('estaciones','titulo','documentoGenera','codigoformato'));
    }

   public function store(Request $request)
    {

        $minutas = Minuta::create($request->all());
        return redirect()->route('minutas.index');

    }

    public function show(Minuta $minuta)
    {
       
        $estaciones = Estacion::get();
        $show=true;
        $edit=false; 
        $titulo='Minuta de Junta del Sistema Integral de Administración en Petrolíferos';
        $documentoGenera='ES-PG-002';
        $codigoformato='ES-FG-003';
        return view('minutas.show',compact('minuta','estaciones','show','edit','titulo','documentoGenera','codigoformato'));
    }


    public function edit(Minuta $minuta)
    {
       $show=false;
       $edit=true; 
       $estaciones = Estacion::get();  
       $titulo='Minuta de Junta del Sistema Integral de Administración en Petrolíferos';
       $documentoGenera='ES-PG-002';
       $codigoformato='ES-FG-003';    
       return view('minutas.edit',compact('minuta','estaciones','show','edit','titulo','documentoGenera','codigoformato'));
    }

    public function update(Request $request, Minuta $minuta)
    {

        $minuta->update($request->all());
        return redirect()->route('minutas.index',$minuta->id);
    }

    function destroy(Minuta $minuta)
    {
        $minuta->delete();
        return redirect()->route('minutas.index');
    }
}
