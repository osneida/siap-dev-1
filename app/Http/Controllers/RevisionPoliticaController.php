<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estacion;
use App\RevisionPolitica;


class RevisionPoliticaController extends Controller
{
     public function index()
    {
        $revisionpoliticas = RevisionPolitica::all()->sortBy('id');
        $title = 'Revisión Política';       
        return view('revisionpoliticas.index',compact('title','revisionpoliticas'));
    }


    public function create()
    {
      //lleva ha procedimientos para mostrar los datos de la estacion
      $estaciones = Estacion::get(); 
      //titulo que varia 
      $titulo='Revisión de la Política del Sistema Integral de Administración en Petrolíferos';
      $documentoGenera='ES-FG-002';
      $codigoformato='ES-PG-004';
      return view('revisionpoliticas.create', compact('estaciones','titulo','documentoGenera','codigoformato'));

    }

   public function store(Request $request)
    {

        $procedimientos = RevisionPolitica::create($request->all());
        return redirect()->route('revisionpoliticas.index');

    }

    public function show(RevisionPolitica $revisionpolitica)
    {
       
        $estaciones = Estacion::get();
        $show=true;
        $edit=false; 
        $documentoGenera='ES-PG-002';
        $codigoformato='ES-PG-004';
        return view('revisionpoliticas.show',compact('revisionpolitica','estaciones','show','edit','documentoGenera','codigoformato'));
    }


    public function edit(RevisionPolitica $revisionpolitica)
    {
       $show=false;
       $edit=true; 
       $documentoGenera='';
       $codigoformato='ES-PG-002';
       $estaciones = Estacion::get();      
       return view('revisionpoliticas.edit',compact('revisionpolitica','estaciones','show','edit','documentoGenera','codigoformato'));
    }


    public function update(Request $request, RevisionPolitica $revisionpolitica)
    {

        $revisionpolitica->update($request->all());
        return redirect()->route('revisionpoliticas.index');
    }


    function destroy(RevisionPolitica $revisionpolitica)
    {
        $revisionpolitica->delete();
        return redirect()->route('revisionpoliticas.index');
    }
}
