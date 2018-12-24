<?php

namespace App\Http\Controllers;

use App\Rol;
use App\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{
    public function index()
    {
        $rols = Rol::all()->sortBy('id');
        $title = 'Listado de Roles';       
        return view('roles.index',compact('title','rols'));
    }

    public function show(Rol $rol)
    {
        return view('roles.show',compact('rol'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|max:32',
            'codigo' => 'required',
            'estatus' => '',
        ],[
            'name.required' => 'El campo Nombre es obligatorio',
            'codigo.required' => 'El campo Código es obligatorio',            
        ]);

        Perfil::create([
            'name' => $data['nombre'],
            'codigo' => $data['codigo'],
            'estatus' => $data['estatus'],
        ]);
        return redirect()->route('roles.index');
    }
    public function edit(Rol $rol)
    {
        return view('roles.edit',['rol'=>$rol]);
    }

    public function update(Rol $rol)
    {
        $data = request()->validate([
            'name' => 'required|max:32',
            'id_perfil' => 'required',
            'estatus' => '',
        ],[
            'name.required' => 'El campo Nombre es obligatorio',
            'codigo.required' => 'El campo Código es obligatorio',
        ]);

        $rol->update($data);
        return redirect()->route('roles.show',['rol'=>$rol]);
    }
    function destroy(Perfil $rol)
    {
        $perfil->delete();
        return redirect()->route('roles.index');
    }
}
