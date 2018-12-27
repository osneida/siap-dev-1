<?php

namespace App\Http\Controllers\Competencia;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\competencium;
use Illuminate\Http\Request;

class competenciaController extends Controller
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
            $competencia = competencium::where('numero_revision', 'LIKE', "%$keyword%")
                ->orWhere('elaborado_por', 'LIKE', "%$keyword%")
                ->orWhere('revisado_por', 'LIKE', "%$keyword%")
                ->orWhere('cargo_elaborado', 'LIKE', "%$keyword%")
                ->orWhere('cargo_revisado', 'LIKE', "%$keyword%")
                ->orWhere('fecha_revision', 'LIKE', "%$keyword%")
                ->orWhere('fecha_creacion', 'LIKE', "%$keyword%")
                ->orWhere('estatus', 'LIKE', "%$keyword%")
                ->orWhere('objectivo', 'LIKE', "%$keyword%")
                ->orWhere('alcance', 'LIKE', "%$keyword%")
                ->orWhere('definicion', 'LIKE', "%$keyword%")
                ->orWhere('responsabilidades', 'LIKE', "%$keyword%")
                ->orWhere('descripcion_actividades', 'LIKE', "%$keyword%")
                ->orWhere('registros', 'LIKE', "%$keyword%")
                ->orWhere('referencias_internas', 'LIKE', "%$keyword%")
                ->orWhere('referencias_externas', 'LIKE', "%$keyword%")
                ->orWhere('control_cambio', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $competencia = competencium::latest()->paginate($perPage);
        }

        return view('competencia.competencia.index', compact('competencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('competencia.competencia.create');
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
        
        competencium::create($requestData);

        return redirect('competencia')->with('flash_message', 'competencium added!');
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
        $competencium = competencium::findOrFail($id);

        return view('competencia.competencia.show', compact('competencium'));
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
        $competencium = competencium::findOrFail($id);

        return view('competencia.competencia.edit', compact('competencium'));
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
        
        $competencium = competencium::findOrFail($id);
        $competencium->update($requestData);

        return redirect('competencia')->with('flash_message', 'competencium updated!');
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
        competencium::destroy($id);

        return redirect('competencia')->with('flash_message', 'competencium deleted!');
    }
}
