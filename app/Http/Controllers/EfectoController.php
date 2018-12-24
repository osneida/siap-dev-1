<?php

namespace App\Http\Controllers;
use App\Efecto;
use Illuminate\Http\Request;

class EfectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $efectos = Efecto::all()->sortBy('id');
         //esta variable es la que se manda a llamar en el title
         $title = 'Listado de efectos probables sobre la salud';      
        return view('efectos.index',compact('title','efectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('efectos.create');
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
            'descripcion_efectos_probables_sobre_la_salud' => 'required',
            
        ],[
            'descripcion_efectos_probables_sobre_la_salud.required' => 'El campo Nombre Efecto probable sobre la salud es obligatorio',
            
        ]);

        Efecto::create([
            'descripcion_efectos_probables_sobre_la_salud' => $data['descripcion_efectos_probables_sobre_la_salud'],
            
        ]);
        return redirect()->route('efectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Efecto $efecto)
    {
        return view('efectos.show',compact('efecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Efecto $efecto)
    {
       return view('efectos.edit',['efecto'=>$efecto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Efecto $efecto)
    {
        
        $data = request()->validate([
            'descripcion_efectos_probables_sobre_la_salud' => 'required',
            
        ],[
            'descripcion_efectos_probables_sobre_la_salud.required' => 'El campo Riesgo es obligatorio',
            
        ]);

        $efecto->update($data);
        return redirect()->route('efectos.show',['efecto'=>$efecto]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Efecto $efecto)
    {
        $efecto->delete();
        return redirect()->route('efectos.index');
    }
}
