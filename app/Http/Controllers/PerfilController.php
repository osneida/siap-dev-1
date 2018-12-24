<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    public function index()
    {
        $perfils = Perfil::all()->sortBy('id');
        $title = 'Listado de Perfiles';       
        return view('perfiles.index',compact('title','perfils'));
    }

    public function show(Perfil $perfil)
    {
        return view('perfiles.show',compact('perfil'));
    }

    public function create()
    {
        return view('perfiles.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => 'required|max:64',
            'codigo' => 'required',
            'estatus' => '',
        ],[
            'nombre.required' => 'El campo Nombre es obligatorio',
            'codigo.required' => 'El campo Código es obligatorio',            
        ]);

        Perfil::create([
            'nombre' => $data['nombre'],
            'codigo' => $data['codigo'],
            'estatus' => $data['estatus'],
        ]);
        return redirect()->route('perfiles.index');
    }
    public function edit(Perfil $perfil)
    {
        return view('perfiles.edit',['perfil'=>$perfil]);
    }

    public function update(Perfil $perfil)
    {
        $data = request()->validate([
            'nombre' => 'required|max:32',
            'codigo' => 'required',
            'estatus' => '',
        ],[
            'nombre.required' => 'El campo Nombre es obligatorio',
            'codigo.required' => 'El campo Código es obligatorio',
        ]);

        $perfil->update($data);
        return redirect()->route('perfiles.show',['perfil'=>$perfil]);
    }
    function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect()->route('perfiles.index');
    }
}
