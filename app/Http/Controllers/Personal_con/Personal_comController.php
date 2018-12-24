<?php

namespace App\Http\Controllers\Personal_con;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\aspecto_familiar;
use App\Personal_com;
use Illuminate\Http\Request;

class Personal_comController extends Controller
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
            $personal_com = Personal_com::where('nombre_apellido', 'LIKE', "%$keyword%")
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
                ->orWhere('user', 'LIKE', "%$keyword%")
                ->orWhere('pass', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $personal_com = Personal_com::latest()->paginate($perPage);
        }

        return view('personal_con.personal_com.index', compact('personal_com'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
       
        return view('personal_con.personal_com.create');
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
        
       $programa= Personal_com::create($requestData);


        $i=1;
        $nume=$request->num;
               while ($i<=$nume) {
                aspecto_familiar::create([
                    'id_personal' => $programa->id,
                    'parentesco'=> $request->parentesco[$i],
                   'nombre'=> $request->nombre[$i],
                    'edad'=> $request->edad[$i],
                    'ocupacion'=> $request->ocupacion[$i],
                    'domicilio'=> $request->domicilio[$i],
                    
        
                ]);
           $i=$i+1;     
              }


        return redirect('personal_com')->with('flash_message', 'Personal_com added!');
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
        $personal_com = Personal_com::findOrFail($id);

        return view('personal_con.personal_com.show', compact('personal_com'));
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
        $personal_com = Personal_com::findOrFail($id);
        $aa = aspecto_familiar::where('id_personal',$id)->latest()->paginate(25);

        return view('personal_con.personal_com.edit', compact('personal_com','aa'));
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
        
        $personal_com = Personal_com::findOrFail($id);
        $personal_com->update($requestData);

        return redirect('personal_com')->with('flash_message', 'Personal_com updated!');
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
        Personal_com::destroy($id);

        return redirect('personal_com')->with('flash_message', 'Personal_com deleted!');
    }
}
