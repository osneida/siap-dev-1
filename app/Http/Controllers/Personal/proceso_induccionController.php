<?php

namespace App\Http\Controllers\Proceso_induccion;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mpdf\Mpdf;
use App\proceso_induccion;
use Illuminate\Http\Request;

class proceso_induccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */






    public function getIndex()
    {
        return view('proceso_induccion.proceso_induccion.pdf');
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



        $personal = proceso_induccion::findOrFail($id);
        
      
        if($accion=='html'){
            return view('proceso_induccion.proceso_induccion.pdf',compact('personal'));
        }else{
            $html = view('proceso_induccion.proceso_induccion.pdf',compact('personal'))->render();
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
            $proceso_induccion = proceso_induccion::where('fecha_inicio', 'LIKE', "%$keyword%")
                ->orWhere('fecha_finalizacion', 'LIKE', "%$keyword%")
                ->orWhere('personal_en_induccion', 'LIKE', "%$keyword%")
                ->orWhere('puesto_induccion', 'LIKE', "%$keyword%")
                ->orWhere('personal_responsable', 'LIKE', "%$keyword%")
                ->orWhere('puesto_responsable', 'LIKE', "%$keyword%")
                ->orWhere('motivo', 'LIKE', "%$keyword%")
                ->orWhere('especifique', 'LIKE', "%$keyword%")
                ->orWhere('actividades', 'LIKE', "%$keyword%")
                ->orWhere('documento_asociado', 'LIKE', "%$keyword%")
                ->orWhere('firma_trabajador', 'LIKE', "%$keyword%")
                ->orWhere('firma_capacitador', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $proceso_induccion = proceso_induccion::latest()->paginate($perPage);
        }

        return view('proceso_induccion.proceso_induccion.index', compact('proceso_induccion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('proceso_induccion.proceso_induccion.create');
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
        
        proceso_induccion::create($requestData);

        return redirect('proceso_induccion')->with('flash_message', 'proceso_induccion added!');
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
        $proceso_induccion = proceso_induccion::findOrFail($id);

        return view('proceso_induccion.proceso_induccion.show', compact('proceso_induccion'));
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
        $proceso_induccion = proceso_induccion::findOrFail($id);

        return view('proceso_induccion.proceso_induccion.edit', compact('proceso_induccion'));
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
        
        $proceso_induccion = proceso_induccion::findOrFail($id);
        $proceso_induccion->update($requestData);

        return redirect('proceso_induccion')->with('flash_message', 'proceso_induccion updated!');
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
        proceso_induccion::destroy($id);

        return redirect('proceso_induccion')->with('flash_message', 'proceso_induccion deleted!');
    }
}
