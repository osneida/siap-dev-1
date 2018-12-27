<?php

namespace App\Http\Controllers\Personal;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Personal\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
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
            $personal = Personal::where('nombre_apellido', 'LIKE', "%$keyword%")
                ->orWhere('nacimiento', 'LIKE', "%$keyword%")
                ->orWhere('sexo', 'LIKE', "%$keyword%")
                ->orWhere('estado_civil', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->orWhere('imss', 'LIKE', "%$keyword%")
                ->orWhere('curp', 'LIKE', "%$keyword%")
                ->orWhere('rfc', 'LIKE', "%$keyword%")
                ->orWhere('ine', 'LIKE', "%$keyword%")
                ->orWhere('codigo_postal', 'LIKE', "%$keyword%")
                ->orWhere('calle', 'LIKE', "%$keyword%")
                ->orWhere('numero_exterior', 'LIKE', "%$keyword%")
                ->orWhere('numero_interior', 'LIKE', "%$keyword%")
                ->orWhere('colonia', 'LIKE', "%$keyword%")
                ->orWhere('municipio', 'LIKE', "%$keyword%")
                ->orWhere('estado', 'LIKE', "%$keyword%")
                ->orWhere('celular', 'LIKE', "%$keyword%")
                ->orWhere('telefono_casa', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('c_nombre', 'LIKE', "%$keyword%")
                ->orWhere('c_celular', 'LIKE', "%$keyword%")
                ->orWhere('c_telefono', 'LIKE', "%$keyword%")
                ->orWhere('c_email', 'LIKE', "%$keyword%")
                ->orWhere('grado_instrucion', 'LIKE', "%$keyword%")
                ->orWhere('titulo', 'LIKE', "%$keyword%")
                ->orWhere('idiomas', 'LIKE', "%$keyword%")
                ->orWhere('empresa_a', 'LIKE', "%$keyword%")
                ->orWhere('cargo_a', 'LIKE', "%$keyword%")
                ->orWhere('duracion_a', 'LIKE', "%$keyword%")
                ->orWhere('supervisor_a', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $personal = Personal::latest()->paginate($perPage);
        }

        return view('personal.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('personal.create');
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
        
        Personal::create($requestData);

        return redirect('personal')->with('flash_message', 'Personal added!');
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
        $personal = Personal::findOrFail($id);

        return view('personal.show', compact('personal'));
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
        $personal = Personal::findOrFail($id);

        return view('personal.edit', compact('personal'));
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
        
        $personal = Personal::findOrFail($id);
        $personal->update($requestData);

        return redirect('personal')->with('flash_message', 'Personal updated!');
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
        Personal::destroy($id);

        return redirect('personal')->with('flash_message', 'Personal deleted!');
    }
}
