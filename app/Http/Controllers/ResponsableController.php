<?php

namespace App\Http\Controllers;

use App\Mail\Welcome as WelcomeEmail;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;


use App\Responsable;
use App\Plantillacorreo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponsableController extends Controller
{
    public function index()
    {
        
        $responsables = Responsable::all()->sortBy('id');
        $title = 'Listado de Responsables';       
        return view('responsables.index',compact('title','responsables'));
    }

    public function show(Responsable $responsable)
    {
        return view('responsables.show',compact('responsable'));
    }

    public function create()
    {
        return view('responsables.create');
    }

    public function store()
    {
        $data = request()->validate([
            'codigo' => 'required',            
            'nombre' => 'required|max:32',
            'apellido_paterno' => 'required|min:3',
            'apellido_materno' => '',
            'email' => ['required','email','unique:users,email'],
            'estacion' => 'required|min:3',
            'fecha_baja' => '',            
            'fecha_primer_envio_correo' => '',
            'fecha_ultimo_envio_correo' => '',            
            'estatus' => '',
        ],[
            'codigo.required' => 'El campo Código es obligatorio',
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido_paterno.required' => 'El campo Apellido Paterno es obligatorio y debe escribir al menos 3 caracteres',            
            'apellido_paterno.min' => 'El campo Apellido Paterno debe escribir al menos 3 caracteres',                        
            'email.required' => 'El campo Correo Electrónico es obligatorio',
            'estacion.required' => 'El campo Estación es obligatorio y debe escribir al menos 3 caracteres'   
        ]);

        Responsable::create([
            'codigo' => $data['codigo'],
            'nombre' => $data['nombre'],
            'apellido_paterno' => $data['apellido_paterno'],
            'apellido_materno' => $data['apellido_materno'],
            'email' => $data['email'],
            'estacion' => $data['estacion'],
            'fecha_baja' => date("Y-m-d H:i:s"),
            'fecha_primer_envio_correo' => date("Y-m-d H:i:s"),
            'fecha_ultimo_envio_correo' => date("Y-m-d H:i:s"),
            'estatus' => $data['estatus'],
        ]);
        return redirect()->route('responsables.index');
    }
    public function edit(Responsable $responsable)
    {
        return view('responsables.edit',['responsable'=>$responsable]);
    }   
    
    public function update(Responsable $responsable)
    {       
        $data = request()->validate([
            'codigo' => 'required',            
            'nombre' => 'required|max:32',
            'apellido_paterno' => 'required|min:3',
            'apellido_materno' => '',
            'email' => ['required','email','unique:users,email'],
            'estacion' => 'required|min:3',
            'fecha_baja' => '',            
            'fecha_primer_envio_correo' => '',
            'fecha_ultimo_envio_correo' => '',            
            'estatus' => '',
        ],[
            'codigo.required' => 'El campo Código es obligatorio',
            'nombre.required' => 'El campo Nombre es obligatorio',
            'apellido_paterno.required' => 'El campo Apellido Paterno es obligatorio y debe escribir al menos 3 caracteres',            
            'apellido_paterno.min' => 'El campo Apellido Paterno debe escribir al menos 3 caracteres',                        
            'email.required' => 'El campo Correo Electrónico es obligatorio',
            'estacion.required' => 'El campo Estación es obligatorio y debe escribir al menos 3 caracteres'            
        ]);        
       // dd($data);
        $responsable->update($data);
        return redirect()->route('responsables.show',['responsable'=>$responsable]);
    }  
    function destroy(Responsable $responsable)
    {
        $responsable->delete();
        return redirect()->route('responsables.index');
    } 
    
       
    
    function sendmail(Responsable $responsable)
    {
        $plantillacorreo = Plantillacorreo::find('1');
        $user = new \App\User([
            'name' => $responsable->nombre.' '.$responsable->apellido_paterno.' '.$responsable->apellido_materno,
            'email' => $responsable->email, 
            'memo' => $plantillacorreo->memo, 
        ]);
        //dd($plantillacorreo);
        Mail::to($user->email, $user->name)
                ->send(new WelcomeEmail($user,$plantillacorreo));
        return redirect()->route('responsables.index');
    }    
}
