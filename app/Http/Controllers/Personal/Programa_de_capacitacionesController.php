<?php

namespace App\Http\Controllers\Personal;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Programa_de_capacitaciones_l;
use App\Programa_de_capacitacione;
use Illuminate\Http\Request;

class Programa_de_capacitacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $programa_de_capacitaciones = Programa_de_capacitacione::where('nombre_trabajador', 'LIKE', "%$keyword%")
                ->orWhere('periodo_ejecucion', 'LIKE', "%$keyword%")
                ->orWhere('cargo_trabajador', 'LIKE', "%$keyword%")
                ->orWhere('objetivo_programa', 'LIKE', "%$keyword%")
                ->orWhere('elaborado_por', 'LIKE', "%$keyword%")
                ->orWhere('firma_elaborado', 'LIKE', "%$keyword%")
                ->orWhere('aprobado_por', 'LIKE', "%$keyword%")
                ->orWhere('firma_aprobado', 'LIKE', "%$keyword%")
                ->orWhere('obsevaciones', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $programa_de_capacitaciones = Programa_de_capacitacione::latest()->paginate($perPage);
        }

        return view('programa_de_capacitaciones.index', compact('programa_de_capacitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('programa_de_capacitaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        


       $programa= Programa_de_capacitacione::create($requestData);
$i=1;
$nume=$request->num;
       while ($i<=$nume) {
        Programa_de_capacitaciones_l::create([
            'id_programa' => $programa->id,
            'nombre_capacitacion'=> $request->nombre_capa[$i],
           'tipo_accion'=> $request->tipo[$i],
            'capacitacion_int'=> $request->capa_int[$i],
            'capacitacion_ext'=> $request->capa_ext[$i],
            'contenido'=> $request->contenido[$i],
            'costo_aproximado'=> $request->costo_aprox[$i],
            'mecanismo_medicion'=> $request->mecanismo_medicion[$i],
            'requisito'=> $request->requisitos[$i],
            'duracion_curso'=> $request->duraccion[$i]

        ]);
   $i=$i+1;     
      }

        return redirect('programa_de_capacitaciones/?a='.$request->num)->with('flash_message', 'agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $programa_de_capacitacione = Programa_de_capacitacione::findOrFail($id);

        return view('programa_de_capacitaciones.show', compact('programa_de_capacitacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $programa_de_capacitacione = Programa_de_capacitacione::findOrFail($id);
        $aa = Programa_de_capacitaciones_l::where('id_programa',$id)->latest()->paginate(25);
       
        return view('programa_de_capacitaciones.edit', compact('programa_de_capacitacione','aa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $programa_de_capacitacione = Programa_de_capacitacione::findOrFail($id);
        $programa_de_capacitacione->update($requestData);

        return redirect('programa_de_capacitaciones')->with('flash_message', 'Programa_de_capacitacione updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Programa_de_capacitacione::destroy($id);

        return redirect('programa_de_capacitaciones')->with('flash_message', 'Programa_de_capacitacione deleted!');
    }
}
