<?php

namespace App\Http\Controllers;

use App\Politica;
use App\Estacion;
use Illuminate\Http\Request;

class PoliticaController extends Controller
{

    public function index()
    {
        $politicas = Politica::all()->sortBy('id');
        $title = 'Políticas';       
        return view('politicas.index',compact('title','politicas'));
    }


    public function create()
    {
      //lleva ha politicas para mostrar los datos de la estacion
      $estaciones = Estacion::get(); 
      //titulo que varia 
      $titulo='Política del Sistema Integral de Administración en Petrolíferos';
      $documentoGenera='ES-PG-002';
      $codigoformato='ES-PG-002';
      return view('politicas.create', compact('estaciones','titulo','documentoGenera','codigoformato'));

    }

   public function store(Request $request)
    {

        $politicas = Politica::create($request->all());
        return redirect()->route('politicas.index');

    }

    public function show(Politica $politica)
    {
       
        $estaciones = Estacion::get();
        $show=true;
        $edit=false; 
        $documentoGenera='';
        $codigoformato='ES-PG-002';
        return view('politicas.show',compact('politica','estaciones','show','edit','documentoGenera','codigoformato'));
    }


    public function edit(Politica $politica)
    {
       $show=false;
       $edit=true; 
       $documentoGenera='';
       $codigoformato='ES-PG-002';
       $estaciones = Estacion::get();      
       return view('politicas.edit',compact('politica','estaciones','show','edit','documentoGenera','codigoformato'));
    }


    public function update(Request $request, Politica $politica)
    {

        $politica->update($request->all());
        return redirect()->route('politicas.index');
    }


    function destroy(Politica $politica)
    {
        $politica->delete();
        return redirect()->route('politicas.index');
    }
}
