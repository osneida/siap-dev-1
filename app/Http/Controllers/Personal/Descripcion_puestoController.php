<?php

namespace App\Http\Controllers\Descripcion_puesto;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mpdf\Mpdf;
use App\Descripcion_puesto;
use Illuminate\Http\Request;

class Descripcion_puestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    



    public function getIndex()
    {
        return view('descripcion_puesto.descripcion_puesto.pdf');
    }
    public function getGenerar(Request $request)
    {
        $accion = $request->get('accion');
        $tipo = $request->get('tipo');
        $id = $request->get('id');
        return $this->pdf($accion,$tipo,$id);
    }
    public function pdf($accion='ver',$tipo='digital',$id='')
    {



        $personal = Descripcion_puesto::findOrFail($id);
        
      
        if($accion=='html'){
            return view('descripcion_puesto.descripcion_puesto.pdf',compact('personal'));
        }else{
            $html = view('descripcion_puesto.descripcion_puesto.pdf',compact('personal'))->render();
        }
        $namefile = 'reporte'.time().'.pdf';
 
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];
 
        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $mpdf = new Mpdf([
            'fontDir' => array_merge($fontDirs, [
                public_path() . '/fonts',
            ]),
           
            'default_font' => 'arial',
            "format" => "A4",
           // "format" => [264.8,188.9],
        ]);
        // $mpdf->SetTopMargin(5);
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($html);
        // dd($mpdf);
        if($accion=='ver'){
            $mpdf->Output($namefile,"I");
        }elseif($accion=='descargar'){
            $mpdf->Output($namefile,"D");
        }
    }





    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $descripcion_puesto = Descripcion_puesto::where('nombre_puesto', 'LIKE', "%$keyword%")
                ->orWhere('supervisor_inmediato', 'LIKE', "%$keyword%")
                ->orWhere('nivel_autoridad', 'LIKE', "%$keyword%")
                ->orWhere('funciones_responsabilidad', 'LIKE', "%$keyword%")
                ->orWhere('actividades', 'LIKE', "%$keyword%")
                ->orWhere('nivel_academico', 'LIKE', "%$keyword%")
                ->orWhere('formacion', 'LIKE', "%$keyword%")
                ->orWhere('experiencia', 'LIKE', "%$keyword%")
                ->orWhere('competencias', 'LIKE', "%$keyword%")
                ->orWhere('habilidades', 'LIKE', "%$keyword%")
                ->orWhere('aprobado_por', 'LIKE', "%$keyword%")
                ->orWhere('recibido_por', 'LIKE', "%$keyword%")
                ->orWhere('firma_aprobado', 'LIKE', "%$keyword%")
                ->orWhere('firma_recibido', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $descripcion_puesto = Descripcion_puesto::latest()->paginate($perPage);
        }

        return view('descripcion_puesto.descripcion_puesto.index', compact('descripcion_puesto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('descripcion_puesto.descripcion_puesto.create');
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
        
        Descripcion_puesto::create($requestData);

        return redirect('descripcion_puesto')->with('flash_message', 'Descripcion_puesto added!');
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
        $descripcion_puesto = Descripcion_puesto::findOrFail($id);

        return view('descripcion_puesto.descripcion_puesto.show', compact('descripcion_puesto'));
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
        $descripcion_puesto = Descripcion_puesto::findOrFail($id);

        return view('descripcion_puesto.descripcion_puesto.edit', compact('descripcion_puesto'));
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
        
        $descripcion_puesto = Descripcion_puesto::findOrFail($id);
        $descripcion_puesto->update($requestData);

        return redirect('descripcion_puesto')->with('flash_message', 'Descripcion_puesto updated!');
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
        Descripcion_puesto::destroy($id);

        return redirect('descripcion_puesto')->with('flash_message', 'Descripcion_puesto deleted!');
    }
}
