<?php

namespace App\Http\Controllers;

use App\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropietarioController extends Controller
{
    public function index()
    {

        $propietarios = Propietario::all()->sortBy('id');
        $title = 'Listado de Clientes';       
        return view('propietarios.index',compact('title','propietarios'));
    }

    public function show(Propietario $propietario)
    {
        return view('propietarios.show',compact('propietario'));
    }

    public function create()
    {
        return view('propietarios.create');
    }

    public function store()
    {
        $data = request()->validate([
            'codigo' => 'required',
            'nombre' => 'required|max:32',
            'apellido_paterno' => 'required|min:3',
            'apellido_materno' => '',
            'email' => ['required','email','unique:users,email'],
            'direccion' => '',
            'telefono1' => '',
            'telefono2' => '',
            'celular1' => '',
            'celular2' => '',
            'fecha_baja' => '',
            'estatus' => '',
        ],[
            'codigo.required' => 'El campo Código es obligatorio',
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido_paterno.required' => 'El campo Apellido Paterno es obligatorio y debe escribir al menos 3 caracteres',
            'apellido_paterno.min' => 'El campo Apellido Paterno debe escribir al menos 3 caracteres',
            'email.required' => 'El campo Correo Electrónico es obligatorio'
        ]);

        Propietario::create([
            'codigo' => $data['codigo'],
            'nombre' => $data['nombre'],
            'apellido_paterno' => $data['apellido_paterno'],
            'apellido_materno' => $data['apellido_materno'],
            'email' => $data['email'],
            'direccion' => $data['direccion'],
            'telefono1' => $data['telefono1'],
            'telefono2' => $data['telefono2'],
            'celular1' => $data['celular1'],
            'celular2' => $data['celular2'],
            'fecha_baja' => date("Y-m-d H:i:s"),
            'estatus' => $data['estatus'],
        ]);
        return redirect()->route('propietarios.index');
    }
    public function edit(Propietario $propietario)
    {
        return view('propietarios.edit',['propietario'=>$propietario]);
    }

    public function update(Propietario $propietario)
    {
        $data = request()->validate([
            'codigo' => 'required',
            'nombre' => 'required|max:32',
            'apellido_paterno' => 'required|min:3',
            'apellido_materno' => '',
            'email' => ['required','email','unique:users,email'],
            'direccion' => '',
            'telefono1' => '',
            'telefono2' => '',
            'celular1' => '',
            'celular2' => '',
            'fecha_baja' => '',
            'estatus' => '',
        ],[
            'codigo.required' => 'El campo Código es obligatorio',
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido_paterno.required' => 'El campo Apellido Paterno es obligatorio y debe escribir al menos 3 caracteres',
            'apellido_paterno.min' => 'El campo Apellido Paterno debe escribir al menos 3 caracteres',
            'email.required' => 'El campo Correo Electrónico es obligatorio'
        ]);

        $propietario->update($data);
        return redirect()->route('propietarios.show',['propietario'=>$propietario]);
    }
    function destroy(Propietario $propietario)
    {
        $propietario->delete();
        return redirect()->route('propietarios.index');
    }
}
