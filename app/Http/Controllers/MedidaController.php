<?php

namespace App\Http\Controllers;
use App\Medida;
use Illuminate\Http\Request;

class MedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medidas = Medida::all()->sortBy('id');
         //esta variable es la que se manda a llamar en el title
         $title = 'Listado de Medidas de control';      
        return view('medidas.index',compact('title','medidas'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medidas.create');
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
            'descripcion_medidas_de_control_que_debe_cumplir_el_trabajador' => 'required',
            
        ],[
            'descripcion_medidas_de_control_que_debe_cumplir_el_trabajador.required' => 'El campo Nombre de la Medida de control es obligatorio',
            
        ]);

        Medida::create([
            'descripcion_medidas_de_control_que_debe_cumplir_el_trabajador' => $data['descripcion_medidas_de_control_que_debe_cumplir_el_trabajador'],
            
        ]);
        return redirect()->route('medidas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Medida $medida)
    {
        return view('medidas.show',compact('medida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Medida $medida)
    {
        return view('medidas.edit',['medida'=>$medida]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Medida $medida)
    {
        $data = request()->validate([
            'descripcion_medidas_de_control_que_debe_cumplir_el_trabajador' => 'required',
            
        ],[
            'descripcion_medidas_de_control_que_debe_cumplir_el_trabajador.required' => 'El campo Nombre de la Medida de control es obligatorio',
            
        ]);

        $medida->update($data);
        return redirect()->route('medidas.show',['medida'=>$medida]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medida $medida)
    {
        $medida->delete();
        return redirect()->route('medidas.index');

    }
    public function pdf(){
        $medidas = Medida::all()->sortBy('id');
        $medidas->download('archivo.pdf');
        return view('medidas.pdf',compact('medidas'));
    }
    }
