<?php

namespace App\Http\Controllers;

use App\{Estacion,Tanque};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstacionDatosTecnicosController extends Controller
{
    //
    public function index()
    {

        $estacions = Estacion::all()->sortBy('id');
        //dd($estacions);
        //$id=1;
        $title = 'Listado de Estaciones (Datos Técnicos)';       
        return view('estacionesDatosTecnicos.index',compact('title','estacions'));
    }

    public function show(Estacion $estacion)
    {
        $tanque = Tanque::where('estacion_id', $estacion->id)->get();
        return view('estacionesDatosTecnicos.show',compact('estacion','tanque'));
    }

    public function create()
    {
        return view('estacionesDatosTecnicos.create');
    }

    public function store(Estacion $estacion,Request $request)
    {
        $data = request()->validate([
            'numero_islas' => 'integer',
            'numero_despachadores' => 'integer',   //REVISAR          
            'numero_empleados' => 'integer',//REVISAR
            'fecha_inicio_operacion' => 'date',            //REVISAR
            'estatus_estacion' => 'integer',       //REVISAR     
            /*'numero_despachadores' => '',   //REVISAR          
            'numero_empleados' => '',//REVISAR
            'fecha_inicio_operacion' => '',            //REVISAR
            'estatus_estacion' => '',       //REVISAR     */
            'responsable_obra_diseno' => 'max:64',            
            'numero_permiso_diseno' => 'max:16',            
            'forma_recepcion' => 'max:16',
            'promedio_mensual_ventas' => 'integer',  //REVISAR          
            'tienda_conveniencias' => 'boolean',    //REVISAR         
            'cobro_uso_banos' => 'boolean',//REVISAR 
            /*'promedio_mensual_ventas' => '',  //REVISAR          
            'tienda_conveniencias' => '',    //REVISAR         
            'cobro_uso_banos' => '',//REVISAR             */
         ],[
            'numero_islas.integer' => 'El campo Islas debe ser un número entero',
            'numero_despachadores.integer' => 'El campo Despachadores debe ser un número entero',            
            'numero_empleados.integer' => 'El campo Empleados debe ser un número entero',
            'fecha_inicio_operacion.date' => 'El campo Fecha de Inicio de la Operación debe tener un formato de fécha válida',            
            'estatus_estacion.integer' => 'El campo Estatus Estación debe ser un número entero',
            'responsable_obra_diseno.max' => 'El campo Responsable de la Obra en Diseño debe tener como máximo 64 caracteres',
            'numero_permiso_diseno.max' => 'El campo Nro. del Permiso para la Obra en Diseño debe tener como máximo 16 caracteres',
            'forma_recepcion.max' => 'El campo Forma Recepción debe tener como máximo 16 caracteres',
            'promedio_mensual_ventas.integer' => 'El campo Promedio Mensual de Ventas en Litros debe ser un número entero',
            'tienda_conveniencias.boolean' => 'El campo Tienda Conveniencias debe ser en formato Si/No',
            'cobro_uso_banos.boolean' => 'El campo Cobro del Uso de Baños debe ser en formato Si/No',
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
        Estacion::profile()->create([
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
       
        return redirect()->route('estacionesDatosTecnicos.index');
    }
    
    public function update(Estacion $estacion,Tanque $tanque)
    {
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
        $data2['estacion_id']=$estacion->id;

        $post2 = $tanque->update($data2);
        if(!$post2){
            Tanque::create([
                //'id' => Estacion::first()->id,
                //'id_estacion' => Estacion::first()->id,            
                'estacion_id' => $estacion->id,            
                'nro_tanques_individuales' => $data2['nro_tanques_individuales'],
                'nro_tanques_compartidos' => $data2['nro_tanques_compartidos'],
                'capacidad_tanques' => $data2['capacidad_tanques'],
                'aditivo_gasolina1' => $data2['aditivo_gasolina1'],
                'aditivo_gasolina2' => $data2['aditivo_gasolina2'],
                'aditivo_diesel' => $data2['aditivo_diesel'],
            ]);                    
        }
        /*Estacion::profile()->create([
            //'id' => Estacion::first()->id,
            //'id_estacion' => Estacion::first()->id,            
            //'id_estacion' => $post->id,            
            'nro_tanques_individuales' => $data2['nro_tanques_individuales'],
            'nro_tanques_compartidos' => $data2['nro_tanques_compartidos'],
            'capacidad_tanques' => $data2['capacidad_tanques'],
            'aditivo_gasolina1' => $data2['aditivo_gasolina1'],
            'aditivo_gasolina2' => $data2['aditivo_gasolina2'],
            'aditivo_diesel' => $data2['aditivo_diesel'],
        ]);*/              
        /*$post = Tanque::create([
            'estacion_id' => $estacion->id,
            'nro_tanques_individuales' => $data2['nro_tanques_individuales'],
            'nro_tanques_compartidos' => $data2['nro_tanques_compartidos'],
            'capacidad_tanques' => $data2['capacidad_tanques'],
            'aditivo_gasolina1' => $data2['aditivo_gasolina1'],
            'aditivo_gasolina2' => $data2['aditivo_gasolina2'],
            'aditivo_diesel' => $data2['aditivo_diesel']
        ]);            */
        /*$post->profile()->create([
            //'id' => Estacion::first()->id,
            //'id_estacion' => Estacion::first()->id,            
            //'id_estacion' => $post->id,            
            'nro_tanques_individuales' => $data2['nro_tanques_individuales'],
            'nro_tanques_compartidos' => $data2['nro_tanques_compartidos'],
            'capacidad_tanques' => $data2['capacidad_tanques'],
            'aditivo_gasolina1' => $data2['aditivo_gasolina1'],
            'aditivo_gasolina2' => $data2['aditivo_gasolina2'],
            'aditivo_diesel' => $data2['aditivo_diesel'],
        ]);        */
        
        
        return redirect()->route('estacionesDatosTecnicos.show',['estacion'=>$estacion]);
    }
    
    public function edit(Estacion $estacion)
    {
        $tanques = Tanque::where('estacion_id', $estacion->id)->first();
        return view('estacionesDatosTecnicos.edit',compact('estacion','tanques'));
    }        
}
