<?php

namespace App\Http\Controllers;

use App\Procedimiento;
use App\Estacion;
use Illuminate\Http\Request;

class ProcedimientoController extends Controller
{

    public function index()
    {
        $procedimientos = Procedimiento::all()->sortBy('id');
        $title = 'Procedimiento';       
        return view('procedimientos.index',compact('title','procedimientos'));
    }


    public function create()
    {
      //lleva ha procedimientos para mostrar los datos de la estacion
      $estaciones = Estacion::get(); 
      //titulo que varia 
      $titulo='Procedimiento de Políticas del Sistema Integral de Administración en Petrolíferos';
      $documentoGenera='ES-PG-002';
      $codigoformato='ES-PG-002';
      return view('procedimientos.create', compact('estaciones','titulo','documentoGenera','codigoformato'));

    }

   public function store(Request $request)
    {

        $procedimientos = Procedimiento::create($request->all());
        return redirect()->route('procedimientos.index');

    }

    public function show(Procedimiento $procedimiento)
    {
       
        $estaciones = Estacion::get();
        $show=true;
        $edit=false; 
        $documentoGenera='';
        $codigoformato='ES-PG-002';
        return view('procedimientos.show',compact('procedimiento','estaciones','show','edit','documentoGenera','codigoformato'));
    }


    public function edit(Procedimiento $procedimiento)
    {
       $show=false;
       $edit=true; 
       $documentoGenera='';
       $codigoformato='ES-PG-002';
       $estaciones = Estacion::get();      
       return view('procedimientos.edit',compact('procedimiento','estaciones','show','edit','documentoGenera','codigoformato'));
    }


    public function update(Request $request, Procedimiento $procedimiento)
    {

        $procedimiento->update($request->all());
        return redirect()->route('procedimientos.index');
    }


    function destroy(Procedimiento $procedimiento)
    {
        $procedimiento->delete();
        return redirect()->route('procedimientos.index');
    }
}
