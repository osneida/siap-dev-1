<?php

namespace App\Http\Controllers\Proceso_de_inducciones;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mpdf\Mpdf;
use App\Proceso_de_induccion;
use Illuminate\Http\Request;

class Proceso_de_induccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */






    public function getIndex()
    {
        return view('proceso_de_induccion.proceso_de_induccion.pdf');
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



        $personal = Proceso_de_induccion::findOrFail($id);
        
      
        if($accion=='html'){
            return view('proceso_de_induccion.proceso_de_induccion.pdf',compact('personal'));
        }else{
            $html = view('proceso_de_induccion.proceso_de_induccion.pdf',compact('personal'))->render();
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
            $proceso_de_induccion = Proceso_de_induccion::where('fecha_de_inicio', 'LIKE', "%$keyword%")
                ->orWhere('fecha_de_finalizacion', 'LIKE', "%$keyword%")
                ->orWhere('personal_en_induccion', 'LIKE', "%$keyword%")
                ->orWhere('puesto_a', 'LIKE', "%$keyword%")
                ->orWhere('personal_responsable', 'LIKE', "%$keyword%")
                ->orWhere('puesto_b', 'LIKE', "%$keyword%")
                ->orWhere('actividades_a_realizar', 'LIKE', "%$keyword%")
                ->orWhere('documento_asociado', 'LIKE', "%$keyword%")
                ->orWhere('nombre_del_trabajador', 'LIKE', "%$keyword%")
                ->orWhere('nombre_del_capacitador', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $proceso_de_induccion = Proceso_de_induccion::latest()->paginate($perPage);
        }

        return view('proceso_de_induccion.proceso_de_induccion.index', compact('proceso_de_induccion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('proceso_de_induccion.proceso_de_induccion.create');
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
        
        Proceso_de_induccion::create($requestData);

        return redirect('proceso_de_induccion')->with('flash_message', 'Proceso_de_induccion added!');
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
        $proceso_de_induccion = Proceso_de_induccion::findOrFail($id);

        return view('proceso_de_induccion.proceso_de_induccion.show', compact('proceso_de_induccion'));
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
        $proceso_de_induccion = Proceso_de_induccion::findOrFail($id);

        return view('proceso_de_induccion.proceso_de_induccion.edit', compact('proceso_de_induccion'));
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
        
        $proceso_de_induccion = Proceso_de_induccion::findOrFail($id);
        $proceso_de_induccion->update($requestData);

        return redirect('proceso_de_induccion')->with('flash_message', 'Proceso_de_induccion updated!');
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
        Proceso_de_induccion::destroy($id);

        return redirect('proceso_de_induccion')->with('flash_message', 'Proceso_de_induccion deleted!');
    }
}
