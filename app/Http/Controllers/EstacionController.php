<?php

namespace App\Http\Controllers;

//use App\Estacion;
use App\{Estacion,Tanque};
use App\Propietario;
use App\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class EstacionController extends Controller
{
    public function index()
    {

        $estacions = Estacion::all()->sortBy('id');
        $title = 'Listado de Estaciones';       
        return view('estaciones.index',compact('title','estacions'));
    }

    public function show(Estacion $estacion)
    {
        $propietario = Propietario::where('id', $estacion->id_propietario)->get();
        $tanque = Tanque::where('estacion_id', $estacion->id)->get();
        //dd($propietario);
        return view('estaciones.show',compact('estacion','propietario','tanque'));
    }

    public function create()
    {
        $propietarios = Propietario::all()->sortBy('id');
        $estados = Estado::all()->sortBy('id');
        return view('estaciones.create',['propietario'=>$propietarios,'estados'=>$estados]);
    }
       
    public function store(Estacion $estacion,Request $request)
    { 
        $data = request()->all();
        //dd($data);
        $data = request()->validate([            
            'descripcion' => 'required|max:64',           
            'nroper_cre' => 'required|max:16',
            'rfc_estacion' => 'required|max:16',                        
            'id_propietario' => '', //VALIDAR
            'id_grupo' => '', //VALIDAR
            'nombre_responsable' => 'required|max:32',
            'email_responsable' => ['required','max:32','email'],            
            'nro_estacion' => 'max:16',            
            'codigo' => 'required|min:3|max:8',
            'nombre' => 'required|max:32',                        
            'logo' => 'image|mimes:jpeg,png|dimensions:max_width=600,max_height=600',
            'foto' => 'image|mimes:jpeg,png|dimensions:max_width=600,max_height=600',                       
        ],[
            'descripcion.required' => 'El campo Nombre de la Estación de Servicio es obligatorio y debe tener como máximo 64 caracteres',
            'descripcion.max' => 'El campo Nombre de la Estación de Servicio debe tener como máximo 32 caracteres',            
            'nroper_cre.required' => 'El campo Número Permiso CRE es obligatorio  y con un máximo de 16 caracteres',
            'nroper_cre.max' => 'El campo Número Permiso CRE debe tener como máximo 16 caracteres',
            'rfc_estacion.required' => 'El campo Número RFC de la Estación es obligatorio y con un máximo de 16 caracteres',
            'rfc_estacion.max' => 'El campo Número RFC de la Estación debe tener como máximo 16 caracteres',            
            //'id_propietario.required' => 'El campo Propietario es obligatorio',
            //'id_grupo.required' => 'El campo Grupo es obligatorio',
            'nombre_responsable.required' => 'El campo Nombre del Responsable es obligatorio y con un máximo de 32 caracteres',
            'nombre_responsable.max' => 'El campo Nombre del Responsable debe tener como máximo 32 caracteres',            
            'email_responsable.required' => 'El campo Correo Electrónico Responsable es obligatorio',
            'email_responsable.email' => 'El campo Correo Electrónico Responsable deberá ser una dirección de correo electrónico válida',
            'email_responsable.max' => 'El campo Correo Electrónico Responsable debe tener un máximo de 32 caracteres',
            'nro_estacion.max' => 'El campo Número Estación debe tener un máximo de 16 caracteres',           
            'codigo.required' => 'El campo Código es obligatorio y debe escribir al menos 3 caracteres y máximo 8 caracteres',
            'codigo.min' => 'El campo Código debe tener al menos 3 caracteres',
            'codigo.max' => 'El campo Código debe tener como máximo 8 caracteres',            
            'nombre.required' => 'El campo Nombre es obligatorio y debe tener como máximo 32 caracteres',
            'nombre.max' => 'El campo Nombre debe tener como máximo 32 caracteres',            
            'logo.image' => 'El campo Logo debe ser en formato de imagen',
            'logo.mimes' => 'El campo Logo debe ser un tipo de archivo jpeg o png',
            'logo.dimensions' => 'El campo Logo debe tener un ancho y alto no mayor a 600 pixeles',
            'foto.image' => 'El campo Foto del Representante Legal debe ser en formato de imagen y el tipo de archivo jpeg o png',            
            'foto.mimes' => 'El campo Foto del Representante Legal debe ser un tipo de archivo jpeg o png',            
            'foto.dimensions' => 'El campo Foto debe tener un ancho y alto no mayor a 600 pixeles', 
            ]);
        DB::transaction(function() use($data){
        
            $post = Estacion::create([
                'codigo' => $data['codigo'],
                'nombre' => $data['nombre'],
                'descripcion' => $data['descripcion'],
                'id_propietario' => $data['id_propietario'],
                //'id_propietario' => NULL, //VALIDAR
                'id_grupo' => NULL,            //VALIDAR
                'nombre_responsable' =>  $data['nombre_responsable'],
                'email_responsable' =>  $data['email_responsable'],
                'rfc_estacion' =>  $data['rfc_estacion'],
                'nro_estacion' =>  $data['nro_estacion'],            
                'nroper_cre' =>  $data['nroper_cre'],
            ]);
            //IMAGENES
            if(!empty($data['logo'])){
                $path = Storage::disk('public')->put('image',$data['logo']);
                $post->fill(['logo' => asset($path)])->save();
            }
            if(!empty($data['foto'])){
                $path = Storage::disk('public')->put('image',$data['foto']);
                $post->fill(['foto' => asset($path)])->save();
            }
            
        });       
        return redirect()->route('estaciones.index');
    }

    
    public function edit(Estacion $estacion)
    {
        $id_propietario = $estacion->id_propietario;
        $propietarios = Propietario::all()->sortBy('id');
        return view('estaciones.edit',compact('estacion','propietarios','id_propietario'));
    }

    public function update(Estacion $estacion,Tanque $tanque)
    {
        $data = request()->validate([
            'descripcion' => 'required|max:64',           
            'nroper_cre' => 'required|max:16',
            'rfc_estacion' => 'required|max:16',                        
            'id_propietario' => '', //VALIDAR
            'id_grupo' => '', //VALIDAR
            'nombre_responsable' => 'required|max:32',
            'email_responsable' => ['required','max:32','email'],            
            'nro_estacion' => 'max:16',            
            'codigo' => 'required|min:3|max:8',
            'nombre' => 'required|max:32',                        
            'logo' => 'image|mimes:jpeg,png|dimensions:max_width=600,max_height=600',
            'foto' => 'image|mimes:jpeg,png|dimensions:max_width=600,max_height=600',                       
            ],[
            'descripcion.required' => 'El campo Nombre de la Estación de Servicio es obligatorio y debe tener como máximo 64 caracteres',
            'descripcion.max' => 'El campo Nombre de la Estación de Servicio debe tener como máximo 32 caracteres',            
            'nroper_cre.required' => 'El campo Número Permiso CRE es obligatorio  y con un máximo de 16 caracteres',
            'nroper_cre.max' => 'El campo Número Permiso CRE debe tener como máximo 16 caracteres',
            'rfc_estacion.required' => 'El campo Número RFC de la Estación es obligatorio y con un máximo de 16 caracteres',
            'rfc_estacion.max' => 'El campo Número RFC de la Estación debe tener como máximo 16 caracteres',            
            //'id_propietario.required' => 'El campo Propietario es obligatorio',
            //'id_grupo.required' => 'El campo Grupo es obligatorio',
            'nombre_responsable.required' => 'El campo Nombre del Responsable es obligatorio y con un máximo de 32 caracteres',
            'nombre_responsable.max' => 'El campo Nombre del Responsable debe tener como máximo 32 caracteres',            
            'email_responsable.required' => 'El campo Correo Electrónico Responsable es obligatorio',
            'email_responsable.email' => 'El campo Correo Electrónico Responsable deberá ser una dirección de correo electrónico válida',
            'email_responsable.max' => 'El campo Correo Electrónico Responsable debe tener un máximo de 32 caracteres',
            'nro_estacion.max' => 'El campo Número Estación debe tener un máximo de 16 caracteres',           
            'codigo.required' => 'El campo Código es obligatorio y debe escribir al menos 3 caracteres y máximo 8 caracteres',
            'codigo.min' => 'El campo Código debe tener al menos 3 caracteres',
            'codigo.max' => 'El campo Código debe tener como máximo 8 caracteres',            
            'nombre.required' => 'El campo Nombre es obligatorio y debe tener como máximo 32 caracteres',
            'nombre.max' => 'El campo Nombre debe tener como máximo 32 caracteres',            
            'logo.image' => 'El campo Logo debe ser en formato de imagen',
            'logo.mimes' => 'El campo Logo debe ser un tipo de archivo jpeg o png',
            'logo.dimensions' => 'El campo Logo debe tener un ancho y alto no mayor a 600 pixeles',
            'foto.image' => 'El campo Foto del Representante Legal debe ser en formato de imagen y el tipo de archivo jpeg o png',            
            'foto.mimes' => 'El campo Foto del Representante Legal debe ser un tipo de archivo jpeg o png',            
            'foto.dimensions' => 'El campo Foto debe tener un ancho y alto no mayor a 600 pixeles',                        
            ]);      
            $post = $estacion->update($data);
            if(!empty($data['logo'])){
                $path = Storage::disk('public')->put('image',$data['logo']);
                $estacion->fill(['logo' => asset($path)])->save();
                $logo = explode("image/", $estacion->logo);
                //Storage::disk('public')->delete('image',$logo[1]);
                //unlink(/directorio/mi-imagen.jpg);//
            }
            if(!empty($data['foto'])){
                $path = Storage::disk('public')->put('image',$data['foto']);
                $estacion->fill(['foto' => asset($path)])->save();
                //$foto = explode("image/", $estacion->foto);
                //Storage::delete('image/'.$foto[1]);
                //dd(Storage::disk('public')->delete('image',$foto[1]));

            }
        return redirect()->route('estaciones.show',['estacion'=>$estacion]);
    }

    function destroy(Estacion $estacion)
    {
        $estacion->delete();        
        return redirect()->route('estaciones.index');
    }


}
