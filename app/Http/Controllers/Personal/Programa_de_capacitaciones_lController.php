<?php

namespace App\Http\Controllers\Personal;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Programa_de_capacitaciones_l;
use Illuminate\Http\Request;

class Programa_de_capacitaciones_lController extends Controller
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
            $programa_de_capacitaciones_l = Programa_de_capacitaciones_l::where('id_programa', 'LIKE', "%$keyword%")
                ->orWhere('nombre_capacitacion', 'LIKE', "%$keyword%")
                ->orWhere('tipo_accion', 'LIKE', "%$keyword%")
                ->orWhere('capacitacion_int', 'LIKE', "%$keyword%")
                ->orWhere('capacitacion_ext', 'LIKE', "%$keyword%")
                ->orWhere('contenido', 'LIKE', "%$keyword%")
                ->orWhere('costo_aproximado', 'LIKE', "%$keyword%")
                ->orWhere('mecanismo_medicion', 'LIKE', "%$keyword%")
                ->orWhere('requisito', 'LIKE', "%$keyword%")
                ->orWhere('duracion_curso', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $programa_de_capacitaciones_l = Programa_de_capacitaciones_l::latest()->paginate($perPage);
        }

        return view('programa_de_capacitaciones_l.programa_de_capacitaciones_l.index', compact('programa_de_capacitaciones_l'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('programa_de_capacitaciones_l.programa_de_capacitaciones_l.create');
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
        
        Programa_de_capacitaciones_l::create($requestData);

        return redirect('programa_de_capacitaciones_l')->with('flash_message', 'Programa_de_capacitaciones_l added!');
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
        $programa_de_capacitaciones_l = Programa_de_capacitaciones_l::findOrFail($id);

        return view('programa_de_capacitaciones_l.programa_de_capacitaciones_l.show', compact('programa_de_capacitaciones_l'));
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
        $programa_de_capacitaciones_l = Programa_de_capacitaciones_l::findOrFail($id);

        return view('programa_de_capacitaciones_l.programa_de_capacitaciones_l.edit', compact('programa_de_capacitaciones_l'));
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
        
        $programa_de_capacitaciones_l = Programa_de_capacitaciones_l::findOrFail($id);
        $programa_de_capacitaciones_l->update($requestData);

        return redirect("programa_de_capacitaciones/".$programa_de_capacitaciones_l->id_programa."/edit")->with('flash_message', 'Programa_de_capacitaciones_l updated!');
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
        Programa_de_capacitaciones_l::destroy($id);
        $programa_de_capacitaciones_l = Programa_de_capacitaciones_l::findOrFail($id);

        return redirect("programa_de_capacitaciones/".$programa_de_capacitaciones_l->id_programa."/edit")->with('flash_message', 'Programa_de_capacitacione deleted!');
    }
}
