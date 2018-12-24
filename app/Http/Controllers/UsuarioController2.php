<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index()
    {

        $usuarios = Usuario::all()->sortBy('id');
        $title = 'Listado de Usuarios';       
        return view('usuarios.index',compact('title','usuarios'));
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show',compact('usuario'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|max:32',
            'email' => ['required','email','unique:users,email'],
            'fecha_baja' => '',
            'estatus' => '',
        ],[
            'name.required' => 'El campo Nombre es obligatorio',
            'email.required' => 'El campo Correo Electrónico es obligatorio'
        ]);

        Usuario::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'fecha_baja' => date("Y-m-d H:i:s"),
            'estatus' => $data['estatus'],
        ]);
        return redirect()->route('usuarios.index');
    }
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit',['usuario'=>$usuario]);
    }

    public function update(Usuario $usuario)
    {
        $data = request()->validate([
            'name' => 'required|max:32',
            'email' => ['required','email','unique:users,email'],
            'fecha_baja' => '',
            'estatus' => '',
        ],[
            'name.required' => 'El campo Nombre es obligatorio',
            'email.required' => 'El campo Correo Electrónico es obligatorio'
        ]);

        $usuario->update($data);
        return redirect()->route('usuarios.show',['usuario'=>$usuario]);
    }
    function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
