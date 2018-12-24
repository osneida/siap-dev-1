<?php

namespace App\Http\Controllers;
use App\Tiporiesgo;
use Illuminate\Http\Request;

class TipoRiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tiporiesgos = TipoRiesgo::all()->sortBy('id');
         //esta variable es la que se manda a llamar en el title
         $title = 'Listado de tipo de riesgos';      
        return view('tiporiesgos.index',compact('title','tiporiesgos'));
        //----------------------------------------- es esta parte
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiporiesgos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre_tipo_riesgo' => 'required',
            
        ],[
            'nombre_tipo_riesgo.required' => 'El campo Tipo de riesgo es obligatorio',
            
        ]);

        TipoRiesgo::create([
            'nombre_tipo_riesgo' => $data['nombre_tipo_riesgo'],
            
        ]);
        return redirect()->route('tiporiesgos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tiporiesgo $tiporiesgo)
    {
        return view('tiporiesgos.show',compact('tiporiesgo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiporiesgo $tiporiesgo)
    {
         return view('tiporiesgos.edit',['tiporiesgo'=>$tiporiesgo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tiporiesgo $tiporiesgo)
    {
         $data = request()->validate([
            'nombre_tipo_riesgo' => 'required',
            
        ],[
            'nombre_tipo_riesgo.required' => 'El campo Tipo de Riesgo es obligatorio',
            
        ]);

        $tiporiesgo->update($data);
        return redirect()->route('tiporiesgos.show',['tiporiesgo'=>$tiporiesgo]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiporiesgo $tiporiesgo)
    {
         $tiporiesgo->delete();
        return redirect()->route('tiporiesgos.index');
  
    }
}
