<?php

namespace App\Http\Controllers;
use App\Riesgo;
use App\Tiporiesgo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $riesgos = Riesgo::all()->sortBy('id');
         $tiporiesgos = TipoRiesgo::all()->sortBy('id');
         $title = 'Listado de Riesgos';      
        return view('riesgos.index',compact('title','riesgos','tiporiesgos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $riesgos = Riesgo::all()->sortBy('id');
         $tiporiesgos = TipoRiesgo::all()->sortBy('id');
         return view('riesgos.create',compact('title','riesgos','tiporiesgos'));


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'nombre_riesgo' => 'required',
            
        ],[
            'nombre_riesgo.required' => 'El campo Nombre riesgo es obligatorio',
            
        ]);

        Riesgo::create([
            'nombre_riesgo' => $data['nombre_riesgo'],
            
        ]);
        return redirect()->route('riesgos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Riesgo $riesgo)
    {
        return view('riesgos.show',compact('riesgo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Riesgo $riesgo)
    {
        return view('riesgos.edit',['riesgo'=>$riesgo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Riesgo $riesgo)
    {
        
        $data = request()->validate([
            'nombre_riesgo' => 'required',
            
        ],[
            'nombre_riesgo.required' => 'El campo Riesgo es obligatorio',
            
        ]);

        $riesgo->update($data);
        return redirect()->route('riesgos.show',['riesgo'=>$riesgo]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riesgo $riesgo)
    {
        $riesgo->delete();
        return redirect()->route('riesgos.index');
  
    }
}
