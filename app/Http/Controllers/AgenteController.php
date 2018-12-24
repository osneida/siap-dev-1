<?php

namespace App\Http\Controllers;
use App\Agente;
use Illuminate\Http\Request;

class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $agentes = Agente::all()->sortBy('id');
         //esta variable es la que se manda a llamar en el title
         $title = 'Listado de Agentes de riesgo';      
        return view('agentes.index',compact('title','agentes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agentes.create');
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
            'descripcion_agente_de_riesgo' => 'required',
            
        ],[
            'descripcion_agente_de_riesgo.required' => 'El campo Nombre Agente de riesgo es obligatorio',
            
        ]);

        Agente::create([
            'descripcion_agente_de_riesgo' => $data['descripcion_agente_de_riesgo'],
            
        ]);
        return redirect()->route('agentes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Agente $agente)
    {
         return view('agentes.show',compact('agente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agente $agente)
    {
        return view('agentes.edit',['agente'=>$agente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Agente $agente)
    {
         $data = request()->validate([
            'descripcion_agente_de_riesgo' => 'required',
            
        ],[
            'descripcion_agente_de_riesgo.required' => 'El campo Agente de riesgo es obligatorio',
            
        ]);

        $agente->update($data);
        return redirect()->route('agentes.show',['agente'=>$agente]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agente $agente)
    {
        $agente->delete();
        return redirect()->route('agentes.index');
    }
}
