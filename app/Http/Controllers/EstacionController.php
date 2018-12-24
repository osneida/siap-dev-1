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
            'codigo' => 'required|min:3|max:8',
            'nombre' => 'required|max:32',
            'descripcion' => 'required|max:64',
            'id_propietario' => '', //VALIDAR BIEN
            //'id_propietario' => 'required',
            //'id_grupo' => 'required',            
            'id_grupo' => '',
            'nombre_responsable' => 'required|max:32',
            'email_responsable' => ['required','max:32','email'],            
            'rfc_estacion' => 'required|max:16',            
            'nro_estacion' => 'max:16',            
            'nroper_cre' => 'required|max:16',
            'logo' => 'image|mimes:jpeg,png|dimensions:max_width=600,max_height=600',
            'foto' => 'image|mimes:jpeg,png|dimensions:max_width=600,max_height=600',                       
            'estado_id' => 'max:32',            
            'municipio_id' => 'max:32',            
            'entidad_federal_id' => 'max:32',
            'calle' => 'max:64',            
            'colonia' => 'max:32',                        
            'codigo_postal' => 'max:5',                        
            'referencia1' => 'max:128',            
            'referencia2' => 'max:128',                        
            'telefono1' => 'max:16',            
            'telefono2' => 'max:16',                        
            'celular1' => 'max:16',            
            'celular2' => 'max:16',            
            //'email_estacion' => ['max:32','email'], //REVISAR           
            'email_estacion' => 'max:32',            
            'sitioweb' => 'max:32',            
            'nro_instrumento' => 'max:16',            
            'fecha_constitucion' => '',            
            'notario_constitucion' => 'max:32',            
            'ciudad_constitucion' => 'max:32',                        
            'fecha_emision_replegal' => '',            
            'nombre_replegal' => 'max:32',            
            'nro_inst_replegal' => 'max:16',            
            'fecha_replegal' => '',            
            'notario_replegal' => 'max:32',            
            'ciudad_replegal' => 'max:32',            
            'numero_islas' => 'integer',
            //'numero_despachadores' => 'integer',   //REVISAR          
            //'numero_empleados' => 'integer',//REVISAR
            //'fecha_inicio_operacion' => 'date',            //REVISAR
            //'estatus_estacion' => 'integer',       //REVISAR     
            'numero_despachadores' => '',   //REVISAR          
            'numero_empleados' => '',//REVISAR
            'fecha_inicio_operacion' => '',            //REVISAR
            'estatus_estacion' => '',       //REVISAR     
            'responsable_obra_diseno' => 'max:64',            
            'numero_permiso_diseno' => 'max:16',            
            'forma_recepcion' => 'max:16',
            //'promedio_mensual_ventas' => 'integer',  //REVISAR          
            //'tienda_conveniencias' => 'boolean',    //REVISAR         
            //'cobro_uso_banos' => 'boolean',//REVISAR 
            'promedio_mensual_ventas' => '',  //REVISAR          
            'tienda_conveniencias' => '',    //REVISAR         
            'cobro_uso_banos' => '',//REVISAR 
            'estatus' => 'boolean',            
            //'superficie_total_predio' => 'integer',//REVISAR 
            //'superficie_construccion' => 'integer',//REVISAR 
            //'numero_pisos' => 'integer',//REVISAR 
            //'escaleras' => 'integer',//REVISAR 
            //'cuarto_electrico' => 'boolean',//REVISAR 
            //'cuarto_sucio' => 'boolean',//REVISAR 
            //'cuarto_maquinas' => 'boolean',//REVISAR 
            //'bodega' => 'integer',//REVISAR 
            //'planta_electrica' => 'integer',//REVISAR 
            //'compresor' => 'integer',//REVISAR 
            //'hidroneumaticos' => 'integer',//REVISAR 
            //'numero_banos' => 'integer',//REVISAR 
            //'puestos_estacionamiento' => 'integer',//REVISAR 
            //'puestos_estacionamiento_disc' => 'integer',//REVISAR 
            //'cisterna_aguas_blancas' => 'boolean',//REVISAR 
            //'extintores' => 'integer',//REVISAR 
            //'area_facturacion' => 'boolean',//REVISAR 
            //'surtidor_aire' => 'integer',//REVISAR 
            //'surtidor_agua' => 'integer',            //REVISAR 
            'superficie_total_predio' => '',//REVISAR 
            'superficie_construccion' => '',//REVISAR 
            'numero_pisos' => '',//REVISAR 
            'escaleras' => '',//REVISAR 
            'cuarto_electrico' => '',//REVISAR 
            'cuarto_sucio' => '',//REVISAR 
            'cuarto_maquinas' => '',//REVISAR 
            'bodega' => '',//REVISAR 
            'planta_electrica' => '',//REVISAR 
            'compresor' => '',//REVISAR 
            'hidroneumaticos' => '',//REVISAR 
            'numero_banos' => '',//REVISAR 
            'puestos_estacionamiento' => '',//REVISAR 
            'puestos_estacionamiento_disc' => '',//REVISAR 
            'cisterna_aguas_blancas' => '',//REVISAR 
            'extintores' => '',//REVISAR 
            'area_facturacion' => '',//REVISAR 
            'surtidor_aire' => '',//REVISAR 
            'surtidor_agua' => '',            //REVISAR 
            
        ],[
            'codigo.required' => 'El campo Código es obligatorio y debe escribir al menos 3 caracteres y máximo 8 caracteres',
            'codigo.min' => 'El campo Código debe tener al menos 3 caracteres',
            'codigo.max' => 'El campo Código debe tener como máximo 8 caracteres',            
            'nombre.required' => 'El campo Nombre de la Estación de Servicio es obligatorio y debe tener como máximo 32 caracteres',
            'nombre.max' => 'El campo Nombre de la Estación de Servicio debe tener como máximo 32 caracteres',            
            'descripcion.required' => 'El campo Descripcion es obligatorio y debe tener como máximo 32 caracteres',
            'descripcion.max' => 'El campo Descripcion debe tener como máximo 32 caracteres',            
            //'id_propietario.required' => 'El campo Propietario es obligatorio',
            //'id_grupo.required' => 'El campo Grupo es obligatorio',
            'nombre_responsable.required' => 'El campo Responsable Técnico es obligatorio y con un máximo de 32 caracteres',
            'nombre_responsable.max' => 'El campo Responsable Técnico debe tener como máximo 32 caracteres',            
            'email_responsable.required' => 'El campo Email del Responsable es obligatorio',
            'email_responsable.email' => 'El campo Email del Responsable deberá ser una dirección de correo electrónico válida',
            'email_responsable.max' => 'El campo Email del Responsable debe tener un máximo de 32 caracteres',
            'rfc_estacion.required' => 'El campo Nro. RFC de la Estación es obligatorio y con un máximo de 16 caracteres',
            'rfc_estacion.max' => 'El campo Nro. RFC de la Estación debe tener como máximo 16 caracteres',            
            'nro_estacion.max' => 'El campo Nro. Estación PEMEX debe tener un máximo de 16 caracteres',
            'nroper_cre.required' => 'El campo Nro. Permiso de la CRE es obligatorio  y con un máximo de 16 caracteres',
            'nroper_cre.max' => 'El campo Nro. Permiso de la CRE debe tener como máximo 16 caracteres',
            'logo.image' => 'El campo Logo debe ser en formato de imagen',
            'logo.mimes' => 'El campo Logo debe ser un tipo de archivo jpeg o png',
            'logo.dimensions' => 'El campo Logo debe tener un ancho y alto no mayor a 600 pixeles',
            'foto.image' => 'El campo Foto del Representante Legal debe ser en formato de imagen y el tipo de archivo jpeg o png',            
            'foto.mimes' => 'El campo Foto del Representante Legal debe ser un tipo de archivo jpeg o png',            
            'foto.dimensions' => 'El campo Foto debe tener un ancho y alto no mayor a 600 pixeles',                        
            'estado_id.max' => 'El campo Estado debe tener como máximo 32 caracteres',
            'municipio_id.max' => 'El campo Municipio debe tener como máximo 32 caracteres',
            'entidad_federal_id.max' => 'El campo Entidad Federal debe tener como máximo 32 caracteres',
            'calle.max' => 'El campo Calle debe tener como máximo 64 caracteres',
            'colonia.max' => 'El campo Colonia debe tener como máximo 32 caracteres',            
            'codigo_postal.max' => 'El campo Cód.Postal debe tener como máximo 5 caracteres',            
            'referencia1.max' => 'El campo Referencia Dirección 1 debe tener como máximo 128 caracteres',            
            'referencia2.max' => 'El campo Referencia Dirección 2 debe tener como máximo 128 caracteres',                        
            'telefono1.max' => 'El campo Nro. Teléfono 1 debe tener como máximo 16 caracteres',            
            'telefono2.max' => 'El campo Nro. Teléfono 2 debe tener como máximo 16 caracteres',                        
            'celular1.max' => 'El campo Nro. Celular 1 debe tener como máximo 16 caracteres',            
            'celular2.max' => 'El campo Nro. Celular 2 debe tener como máximo 16 caracteres',                        
            'celular2.max' => 'El campo Nro. Celular 2 debe tener como máximo 16 caracteres',                                    
            //'email_estacion.email' => 'El campo Correo Electrónico de la Estación deberá ser una dirección de correo electrónico válida',
            'email_estacion.max' => 'El campo Correo Electrónico de la Estación debe tener un máximo de 32 caracteres',
            'sitioweb.max' => 'El campo Sitio Web de la Estación debe tener como máximo 32 caracteres',
            'nro_instrumento.max' => 'El campo Nro. Instrumento debe tener como máximo 16 caracteres',            
            'fecha_constitucion.date' => 'El campo Fecha Constitución debe tener un formato de fécha válida',
            'notario_constitucion.max' => 'El campo Notario Constitución debe tener como máximo 32 caracteres',
            'ciudad_constitucion.max' => 'El campo Ciudad debe tener como máximo 32 caracteres',            
            'nombre_replegal.max' => 'El campo Representante Legal debe tener como máximo 32 caracteres',            
            'fecha_emision_replegal.date' => 'El campo Fecha de Emisión (Rep. Legal) debe tener un formato de fécha válida',
            'nro_inst_replegal.max' => 'El campo Nro. Instrumento (Repr. Legal) debe tener como máximo 16 caracteres',            
            'fecha_replegal.date' => 'El campo Fecha Representación debe tener un formato de fécha válida',            
            'notario_replegal.max' => 'El campo Notario (Rep. Legal) debe tener como máximo 32 caracteres',
            'ciudad_replegal.max' => 'El campo Ciudad (Rep. Legal) debe tener como máximo 32 caracteres',
            'numero_islas.integer' => 'El campo Islas debe ser un número entero',
            //'numero_despachadores.integer' => 'El campo Despachadores debe ser un número entero',            
            //'numero_empleados.integer' => 'El campo Empleados debe ser un número entero',
            //'fecha_inicio_operacion.date' => 'El campo Fecha de Inicio de la Operación debe tener un formato de fécha válida',            
            //'estatus_estacion.integer' => 'El campo Estatus Estación debe ser un número entero',
            'responsable_obra_diseno.max' => 'El campo Responsable de la Obra en Diseño debe tener como máximo 64 caracteres',
            'numero_permiso_diseno.max' => 'El campo Nro. del Permiso para la Obra en Diseño debe tener como máximo 16 caracteres',
            'forma_recepcion.max' => 'El campo Forma Recepción debe tener como máximo 16 caracteres',
            //'promedio_mensual_ventas.integer' => 'El campo Promedio Mensual de Ventas en Litros debe ser un número entero',
            //'tienda_conveniencias.boolean' => 'El campo Tienda Conveniencias debe ser en formato Si/No',
            //'cobro_uso_banos.boolean' => 'El campo Cobro del Uso de Baños debe ser en formato Si/No',
            //'superficie_total_predio.integer' => 'El campo Superficie Total de Predio debe ser un número entero',
            //'superficie_construccion.integer' => 'El campo Superficie de Construcción de Predio debe ser un número entero',
            //'numero_pisos.integer' => 'El campo Pisos debe ser un número entero',
            //'escaleras.integer' => 'El campo Escaleras debe ser un número entero',
            //'bodega.integer' => 'El campo Bodega debe ser un número entero',
            //'hidroneumaticos.integer' => 'El campo Hidroneumáticos debe ser un número entero',            
            //'cuarto_electrico.boolean' => 'El campo Cuarto Eléctrico debe ser en formato Si/No',
            //'cuarto_sucio.boolean' => 'El campo Cuarto Sucio debe ser en formato Si/No',
            //'cuarto_maquinas.boolean' => 'El campo Cuarto Máquinas debe ser en formato Si/No',
            //'planta_electrica.integer' => 'El campo Planta Eléctrica debe ser un número entero',
            //'compresor.integer' => 'El campo Compresor debe ser un número entero',
            //'numero_banos.integer' => 'El campo Baños debe ser un número entero',
            //'puestos_estacionamiento.integer' => 'El campo Puestos de Estacionamiento debe ser un número entero',
            //'puestos_estacionamiento_disc.integer' => 'El campo Estacionamiento (Discapacitados) debe ser un número entero',  
            //'cisterna_aguas_blancas.boolean' => 'El campo Cisterna Aguas Blancas debe ser en formato Si/No',
            //'extintores.integer' => 'El campo Extintores debe ser un número entero',
            //'area_facturacion.boolean' => 'El campo Área de Facturación debe ser en formato Si/No',            
            //'surtidor_aire.integer' => 'El campo Surtidor de Aire debe ser un número entero',
            //'surtidor_agua.integer' => 'El campo Surtidor de Agua debe ser un número entero',            
        ]);
        //dd($data);
        DB::transaction(function() use($data){
        
            $post = Estacion::create([
                'codigo' => $data['codigo'],
                'nombre' => $data['nombre'],
                'descripcion' => $data['descripcion'],
                //'id_propietario' => $data['id_propietario'],
                'id_propietario' => NULL, //VALIDAR
                'id_grupo' => NULL,            //VALIDAR
                'nombre_responsable' =>  $data['nombre_responsable'],
                'email_responsable' =>  $data['email_responsable'],
                'rfc_estacion' =>  $data['rfc_estacion'],
                'nro_estacion' =>  $data['nro_estacion'],            
                'nroper_cre' =>  $data['nroper_cre'],
                'calle' =>  $data['calle'],            
                'colonia' =>  $data['colonia'],                        
                'codigo_postal' =>  $data['codigo_postal'],          
                'estado_id' => NULL,            //VALIDAR         
                'municipio_id' => NULL,            //VALIDAR          
                'entidad_federal_id' => NULL,            //VALIDAR           
                'referencia1' =>  $data['referencia1'],
                'referencia2' => $data['referencia2'],
                'telefono1' => $data['telefono1'],   
                'telefono2' => $data['telefono2'],                 
                'celular1' => $data['celular1'],    
                'celular2' => $data['celular2'],     
                'email_estacion' => $data['email_estacion'],            
                'sitioweb' => $data['sitioweb'],
                'nro_instrumento' => $data['nro_instrumento'],           
                'fecha_constitucion' => $data['fecha_constitucion'],        
                'notario_constitucion' => $data['notario_constitucion'],       
                'ciudad_constitucion' => $data['ciudad_constitucion'],                
                'fecha_emision_replegal' => $data['fecha_emision_replegal'],        
                'nombre_replegal' => $data['nombre_replegal'],
                'nro_inst_replegal' => $data['nro_inst_replegal'],       
                'fecha_replegal' => $data['fecha_replegal'],  
                'notario_replegal' => $data['notario_replegal'],       
                'ciudad_replegal' => $data['ciudad_replegal'],    
                'numero_islas' => $data['numero_islas'],
                'numero_despachadores' => $data['numero_despachadores'],
                'numero_empleados' => $data['numero_empleados'],
                'fecha_inicio_operacion' => $data['fecha_inicio_operacion'],       
                'estatus_estacion' => $data['estatus_estacion'],
                'responsable_obra_diseno' => $data['responsable_obra_diseno'],
                'numero_permiso_diseno' => $data['numero_permiso_diseno'],
                'forma_recepcion' => $data['forma_recepcion'],
                'promedio_mensual_ventas' => $data['promedio_mensual_ventas'],
                'tienda_conveniencias' => $data['tienda_conveniencias'],
                'cobro_uso_banos' => $data['cobro_uso_banos'],
                //if($data['foto']){ 
                //}
                //if($data['logo']){ 
                //    'logo' => $data['logo'],                        
                //}
                //'logo' => $data['logo'],
                //'foto' => $data['foto'],                        
                'estatus' => true, //VALIDAR
                'superficie_total_predio' => $data['superficie_total_predio'],
                'superficie_construccion' => $data['superficie_construccion'],
                'numero_pisos' => $data['numero_pisos'],
                'escaleras' => $data['escaleras'],
                'cuarto_electrico' => $data['cuarto_electrico'],
                'cuarto_sucio' => $data['cuarto_sucio'],
                'cuarto_maquinas' => $data['cuarto_maquinas'],
                'bodega' => $data['bodega'],
                'planta_electrica' => $data['planta_electrica'],
                'compresor' => $data['compresor'],
                'hidroneumaticos' => $data['hidroneumaticos'],
                'numero_banos' => $data['numero_banos'],
                'puestos_estacionamiento' => $data['puestos_estacionamiento'],
                'puestos_estacionamiento_disc' => $data['puestos_estacionamiento_disc'],
                'cisterna_aguas_blancas' => $data['cisterna_aguas_blancas'],
                'extintores' => $data['extintores'],
                'area_facturacion' => $data['area_facturacion'],
                'surtidor_aire' => $data['surtidor_aire'],
                'surtidor_agua' => $data['surtidor_agua'],
                'superficie_total_predio' => $data['superficie_total_predio'],
                'superficie_construccion' => $data['superficie_construccion'],
                'numero_pisos' => $data['numero_pisos'],
                'escaleras' => $data['escaleras'],
                'cuarto_electrico' => $data['cuarto_electrico'],
                'cuarto_sucio' => $data['cuarto_sucio'],
                'cuarto_maquinas' => $data['cuarto_maquinas'],
                'bodega' => $data['bodega'],
                'planta_electrica' => $data['planta_electrica'],
                'compresor' => $data['compresor'],
                'hidroneumaticos' => $data['hidroneumaticos'],
                'numero_banos' => $data['numero_banos'],
                'puestos_estacionamiento' => $data['puestos_estacionamiento'],
                'puestos_estacionamiento_disc' => $data['puestos_estacionamiento_disc'],
                'cisterna_aguas_blancas' => $data['cisterna_aguas_blancas'],
                'extintores' => $data['extintores'],
                'area_facturacion' => $data['area_facturacion'],
                'surtidor_aire' => $data['surtidor_aire'],
                'surtidor_agua' => $data['surtidor_agua'],            
            ]);
            $data2 = request()->validate([
                'nro_tanques_individuales' => 'integer',
                'nro_tanques_compartidos' => 'integer',
                'capacidad_tanques' => 'integer',
                'aditivo_gasolina1' => 'max:32',
                'aditivo_gasolina2' => 'max:32',
                'aditivo_diesel' => 'max:32',
            ],[
                'nro_tanques_individuales.integer' => 'El campo Tanques Individuales debe ser un número entero',
                'nro_tanques_compartidos.integer' => 'El campo Tanques Compartidos debe ser un número entero',
                'capacidad_tanques.integer' => 'El campo Capacidad de Tanques debe ser un número entero',
                'aditivo_gasolina1.max' => 'El campo Aditivo Gasolina 1 debe tener como máximo 32 caracteres',
                'aditivo_gasolina2.max' => 'El campo Aditivo Gasolina 2 debe tener como máximo 32 caracteres',
                'aditivo_diesel.max' => 'El campo Aditivo Diesel debe tener como máximo 32 caracteres',
            ]);
            $post->profile()->create([
                //'id' => Estacion::first()->id,
                //'id_estacion' => Estacion::first()->id,            
                //'id_estacion' => $post->id,            
                'nro_tanques_individuales' => $data2['nro_tanques_individuales'],
                'nro_tanques_compartidos' => $data2['nro_tanques_compartidos'],
                'capacidad_tanques' => $data2['capacidad_tanques'],
                'aditivo_gasolina1' => $data2['aditivo_gasolina1'],
                'aditivo_gasolina2' => $data2['aditivo_gasolina2'],
                'aditivo_diesel' => $data2['aditivo_diesel'],
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
        //TAGS
        //$post->tags()->attach($estacion->get('tags')); //attach para create y sync para update
        //request()->file->storeAs('images', request()->file->getClientOriginalName());
        
        return redirect()->route('estaciones.index');
    }

    
    public function edit(Estacion $estacion)
    {
        //$id_propietario = Propietario::where('id', $estacion->id_propietario)->get();
        //$id_propietario = Propietario::where('id', $estacion->id_propietario)->first();
        $id_propietario = $estacion->id_propietario;
        $propietarios = Propietario::all()->sortBy('id');
        $tanques = Tanque::where('estacion_id', $estacion->id)->first();
        $estados = Estado::all()->sortBy('id');        
        $id_estado = $estacion->estado_id;
        //dd($estacion);
        $nro_tanques_individuales = $tanques->nro_tanques_individuales;
        $nro_tanques_compartidos = $tanques->nro_tanques_compartidos;
        $capacidad_tanques = $tanques->capacidad_tanques;

        return view('estaciones.edit',compact('estacion','propietarios','tanques','estados','id_propietario','id_estado','nro_tanques_individuales','nro_tanques_compartidos','capacidad_tanques'));
    }

    public function update(Estacion $estacion,Tanque $tanque)
    {
        $data = request()->all();

        $data = request()->validate([
            'codigo' => 'required|min:3|max:8',
            'nombre' => 'required|max:32',
            'descripcion' => 'required|max:64',
            'id_propietario' => '', //VALIDAR BIEN
            //'id_propietario' => 'required',
            //'id_grupo' => 'required',
            'id_grupo' => '',
            'nombre_responsable' => 'required|max:32',
            'email_responsable' => ['required','max:32','email'],
            'rfc_estacion' => 'required|max:16',
            'nro_estacion' => 'max:16',
            'nroper_cre' => 'required|max:16',
            'logo' => 'image|mimes:jpeg,png|dimensions:max_width=600,max_height=600',
            'foto' => 'image|mimes:jpeg,png|dimensions:max_width=600,max_height=600',
            'estado_id' => 'max:32',
            'municipio_id' => 'max:32',
            'entidad_federal_id' => 'max:32',
            'calle' => 'max:64',
            'colonia' => 'max:32',
            'codigo_postal' => 'max:5',
            'referencia1' => 'max:128',
            'referencia2' => 'max:128',
            'telefono1' => 'max:16',
            'telefono2' => 'max:16',
            'celular1' => 'max:16',
            'celular2' => 'max:16',
            //'email_estacion' => ['max:32','email'], //REVISAR
            'email_estacion' => 'max:32',
            'sitioweb' => 'max:32',
            'nro_instrumento' => 'max:16',
            'fecha_constitucion' => '',
            'notario_constitucion' => 'max:32',
            'ciudad_constitucion' => 'max:32',
            'fecha_emision_replegal' => '',
            'nombre_replegal' => 'max:32',
            'nro_inst_replegal' => 'max:16',
            'fecha_replegal' => '',
            'notario_replegal' => 'max:32',
            'ciudad_replegal' => 'max:32',
            'numero_islas' => 'integer',
            //'numero_despachadores' => 'integer',   //REVISAR
            //'numero_empleados' => 'integer',//REVISAR
            //'fecha_inicio_operacion' => 'date',            //REVISAR
            //'estatus_estacion' => 'integer',       //REVISAR
            'numero_despachadores' => '',   //REVISAR
            'numero_empleados' => '',//REVISAR
            'fecha_inicio_operacion' => '',            //REVISAR
            'estatus_estacion' => '',       //REVISAR
            'responsable_obra_diseno' => 'max:64',
            'numero_permiso_diseno' => 'max:16',
            'forma_recepcion' => 'max:16',
            //'promedio_mensual_ventas' => 'integer',  //REVISAR
            //'tienda_conveniencias' => 'boolean',    //REVISAR
            //'cobro_uso_banos' => 'boolean',//REVISAR
            'promedio_mensual_ventas' => '',  //REVISAR
            'tienda_conveniencias' => '',    //REVISAR
            'cobro_uso_banos' => '',//REVISAR
            'estatus' => 'boolean',
            //'superficie_total_predio' => 'integer',//REVISAR
            //'superficie_construccion' => 'integer',//REVISAR
            //'numero_pisos' => 'integer',//REVISAR
            //'escaleras' => 'integer',//REVISAR
            //'cuarto_electrico' => 'boolean',//REVISAR
            //'cuarto_sucio' => 'boolean',//REVISAR
            //'cuarto_maquinas' => 'boolean',//REVISAR
            //'bodega' => 'integer',//REVISAR
            //'planta_electrica' => 'integer',//REVISAR
            //'compresor' => 'integer',//REVISAR
            //'hidroneumaticos' => 'integer',//REVISAR
            //'numero_banos' => 'integer',//REVISAR
            //'puestos_estacionamiento' => 'integer',//REVISAR
            //'puestos_estacionamiento_disc' => 'integer',//REVISAR
            //'cisterna_aguas_blancas' => 'boolean',//REVISAR
            //'extintores' => 'integer',//REVISAR
            //'area_facturacion' => 'boolean',//REVISAR
            //'surtidor_aire' => 'integer',//REVISAR
            //'surtidor_agua' => 'integer',            //REVISAR
            'superficie_total_predio' => '',//REVISAR
            'superficie_construccion' => '',//REVISAR
            'numero_pisos' => '',//REVISAR
            'escaleras' => '',//REVISAR
            'cuarto_electrico' => '',//REVISAR
            'cuarto_sucio' => '',//REVISAR
            'cuarto_maquinas' => '',//REVISAR
            'bodega' => '',//REVISAR
            'planta_electrica' => '',//REVISAR
            'compresor' => '',//REVISAR
            'hidroneumaticos' => '',//REVISAR
            'numero_banos' => '',//REVISAR
            'puestos_estacionamiento' => '',//REVISAR
            'puestos_estacionamiento_disc' => '',//REVISAR
            'cisterna_aguas_blancas' => '',//REVISAR
            'extintores' => '',//REVISAR
            'area_facturacion' => '',//REVISAR
            'surtidor_aire' => '',//REVISAR
            'surtidor_agua' => '',            //REVISAR

        ],[
            'codigo.required' => 'El campo Código es obligatorio y debe escribir al menos 3 caracteres y máximo 8 caracteres',
            'codigo.min' => 'El campo Código debe tener al menos 3 caracteres',
            'codigo.max' => 'El campo Código debe tener como máximo 8 caracteres',
            'nombre.required' => 'El campo Nombre de la Estación de Servicio es obligatorio y debe tener como máximo 32 caracteres',
            'nombre.max' => 'El campo Nombre de la Estación de Servicio debe tener como máximo 32 caracteres',
            'descripcion.required' => 'El campo Descripcion es obligatorio y debe tener como máximo 32 caracteres',
            'descripcion.max' => 'El campo Descripcion debe tener como máximo 32 caracteres',
            //'id_propietario.required' => 'El campo Propietario es obligatorio',
            //'id_grupo.required' => 'El campo Grupo es obligatorio',
            'nombre_responsable.required' => 'El campo Responsable Técnico es obligatorio y con un máximo de 32 caracteres',
            'nombre_responsable.max' => 'El campo Responsable Técnico debe tener como máximo 32 caracteres',
            'email_responsable.required' => 'El campo Email del Responsable es obligatorio',
            'email_responsable.email' => 'El campo Email del Responsable deberá ser una dirección de correo electrónico válida',
            'email_responsable.max' => 'El campo Email del Responsable debe tener un máximo de 32 caracteres',
            'rfc_estacion.required' => 'El campo Nro. RFC de la Estación es obligatorio y con un máximo de 16 caracteres',
            'rfc_estacion.max' => 'El campo Nro. RFC de la Estación debe tener como máximo 16 caracteres',
            'nro_estacion.max' => 'El campo Nro. Estación PEMEX debe tener un máximo de 16 caracteres',
            'nroper_cre.required' => 'El campo Nro. Permiso de la CRE es obligatorio  y con un máximo de 16 caracteres',
            'nroper_cre.max' => 'El campo Nro. Permiso de la CRE debe tener como máximo 16 caracteres',
            'logo.image' => 'El campo Logo debe ser en formato de imagen',
            'logo.mimes' => 'El campo Logo debe ser un tipo de archivo jpeg o png',
            'logo.dimensions' => 'El campo Logo debe tener un ancho y alto no mayor a 600 pixeles',
            'foto.image' => 'El campo Foto del Representante Legal debe ser en formato de imagen y el tipo de archivo jpeg o png',
            'foto.mimes' => 'El campo Foto del Representante Legal debe ser un tipo de archivo jpeg o png',
            'foto.dimensions' => 'El campo Foto debe tener un ancho y alto no mayor a 600 pixeles',
            'estado_id.max' => 'El campo Estado debe tener como máximo 32 caracteres',
            'municipio_id.max' => 'El campo Municipio debe tener como máximo 32 caracteres',
            'entidad_federal_id.max' => 'El campo Entidad Federal debe tener como máximo 32 caracteres',
            'calle.max' => 'El campo Calle debe tener como máximo 64 caracteres',
            'colonia.max' => 'El campo Colonia debe tener como máximo 32 caracteres',
            'codigo_postal.max' => 'El campo Cód.Postal debe tener como máximo 5 caracteres',
            'referencia1.max' => 'El campo Referencia Dirección 1 debe tener como máximo 128 caracteres',
            'referencia2.max' => 'El campo Referencia Dirección 2 debe tener como máximo 128 caracteres',
            'telefono1.max' => 'El campo Nro. Teléfono 1 debe tener como máximo 16 caracteres',
            'telefono2.max' => 'El campo Nro. Teléfono 2 debe tener como máximo 16 caracteres',
            'celular1.max' => 'El campo Nro. Celular 1 debe tener como máximo 16 caracteres',
            'celular2.max' => 'El campo Nro. Celular 2 debe tener como máximo 16 caracteres',
            'celular2.max' => 'El campo Nro. Celular 2 debe tener como máximo 16 caracteres',
            //'email_estacion.email' => 'El campo Correo Electrónico de la Estación deberá ser una dirección de correo electrónico válida',
            'email_estacion.max' => 'El campo Correo Electrónico de la Estación debe tener un máximo de 32 caracteres',
            'sitioweb.max' => 'El campo Sitio Web de la Estación debe tener como máximo 32 caracteres',
            'nro_instrumento.max' => 'El campo Nro. Instrumento debe tener como máximo 16 caracteres',
            'fecha_constitucion.date' => 'El campo Fecha Constitución debe tener un formato de fécha válida',
            'notario_constitucion.max' => 'El campo Notario Constitución debe tener como máximo 32 caracteres',
            'ciudad_constitucion.max' => 'El campo Ciudad debe tener como máximo 32 caracteres',
            'nombre_replegal.max' => 'El campo Representante Legal debe tener como máximo 32 caracteres',
            'fecha_emision_replegal.date' => 'El campo Fecha de Emisión (Rep. Legal) debe tener un formato de fécha válida',
            'nro_inst_replegal.max' => 'El campo Nro. Instrumento (Repr. Legal) debe tener como máximo 16 caracteres',
            'fecha_replegal.date' => 'El campo Fecha Representación debe tener un formato de fécha válida',
            'notario_replegal.max' => 'El campo Notario (Rep. Legal) debe tener como máximo 32 caracteres',
            'ciudad_replegal.max' => 'El campo Ciudad (Rep. Legal) debe tener como máximo 32 caracteres',
            'numero_islas.integer' => 'El campo Islas debe ser un número entero',
            //'numero_despachadores.integer' => 'El campo Despachadores debe ser un número entero',
            //'numero_empleados.integer' => 'El campo Empleados debe ser un número entero',
            //'fecha_inicio_operacion.date' => 'El campo Fecha de Inicio de la Operación debe tener un formato de fécha válida',
            //'estatus_estacion.integer' => 'El campo Estatus Estación debe ser un número entero',
            'responsable_obra_diseno.max' => 'El campo Responsable de la Obra en Diseño debe tener como máximo 64 caracteres',
            'numero_permiso_diseno.max' => 'El campo Nro. del Permiso para la Obra en Diseño debe tener como máximo 16 caracteres',
            'forma_recepcion.max' => 'El campo Forma Recepción debe tener como máximo 16 caracteres',
            //'promedio_mensual_ventas.integer' => 'El campo Promedio Mensual de Ventas en Litros debe ser un número entero',
            //'tienda_conveniencias.boolean' => 'El campo Tienda Conveniencias debe ser en formato Si/No',
            //'cobro_uso_banos.boolean' => 'El campo Cobro del Uso de Baños debe ser en formato Si/No',
            //'superficie_total_predio.integer' => 'El campo Superficie Total de Predio debe ser un número entero',
            //'superficie_construccion.integer' => 'El campo Superficie de Construcción de Predio debe ser un número entero',
            //'numero_pisos.integer' => 'El campo Pisos debe ser un número entero',
            //'escaleras.integer' => 'El campo Escaleras debe ser un número entero',
            //'bodega.integer' => 'El campo Bodega debe ser un número entero',
            //'hidroneumaticos.integer' => 'El campo Hidroneumáticos debe ser un número entero',
            //'cuarto_electrico.boolean' => 'El campo Cuarto Eléctrico debe ser en formato Si/No',
            //'cuarto_sucio.boolean' => 'El campo Cuarto Sucio debe ser en formato Si/No',
            //'cuarto_maquinas.boolean' => 'El campo Cuarto Máquinas debe ser en formato Si/No',
            //'planta_electrica.integer' => 'El campo Planta Eléctrica debe ser un número entero',
            //'compresor.integer' => 'El campo Compresor debe ser un número entero',
            //'numero_banos.integer' => 'El campo Baños debe ser un número entero',
            //'puestos_estacionamiento.integer' => 'El campo Puestos de Estacionamiento debe ser un número entero',
            //'puestos_estacionamiento_disc.integer' => 'El campo Estacionamiento (Discapacitados) debe ser un número entero',
            //'cisterna_aguas_blancas.boolean' => 'El campo Cisterna Aguas Blancas debe ser en formato Si/No',
            //'extintores.integer' => 'El campo Extintores debe ser un número entero',
            //'area_facturacion.boolean' => 'El campo Área de Facturación debe ser en formato Si/No',
            //'surtidor_aire.integer' => 'El campo Surtidor de Aire debe ser un número entero',
            //'surtidor_agua.integer' => 'El campo Surtidor de Agua debe ser un número entero',
        ]);
        //dd($estacion);
        //DB::transaction(function() use($data)
        //{
            //dd($estacion);
            $post = $estacion->update($data);

            $data2 = request()->validate([
                'nro_tanques_individuales' => 'integer',
                'nro_tanques_compartidos' => 'integer',
                'capacidad_tanques' => 'integer',
                'aditivo_gasolina1' => 'max:32',
                'aditivo_gasolina2' => 'max:32',
                'aditivo_diesel' => 'max:32',
            ],[
                'nro_tanques_individuales.integer' => 'El campo Tanques Individuales debe ser un número entero',
                'nro_tanques_compartidos.integer' => 'El campo Tanques Compartidos debe ser un número entero',
                'capacidad_tanques.integer' => 'El campo Capacidad de Tanques debe ser un número entero',
                'aditivo_gasolina1.max' => 'El campo Aditivo Gasolina 1 debe tener como máximo 32 caracteres',
                'aditivo_gasolina2.max' => 'El campo Aditivo Gasolina 2 debe tener como máximo 32 caracteres',
                'aditivo_diesel.max' => 'El campo Aditivo Diesel debe tener como máximo 32 caracteres',
            ]);
            //$tanque = Tanque::where('estacion_id', $estacion->id)->get();
            //$post->profile()->$data2();
            $tanque->update($data2);
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
        //});
        return redirect()->route('estaciones.show',['estacion'=>$estacion]);
    }

    function destroy(Estacion $estacion,Tanque $tanque)
    {
        $estacion->delete();        
        return redirect()->route('estaciones.index');
    }
}
