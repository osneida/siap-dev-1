<?php

namespace App\Http\Controllers\Acta_confidencial;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mpdf\Mpdf;
use App\acta_confidencial;
use Illuminate\Http\Request;

class acta_confidencialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */









    public function getIndex()
    {
        return view('acta_confidencial.acta_confidencial.pdf');
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



        $personal = acta_confidencial::findOrFail($id);
        
      
        if($accion=='html'){
            return view('acta_confidencial.acta_confidencial.pdf',compact('personal'));
        }else{
            $html = view('acta_confidencial.acta_confidencial.pdf',compact('personal'))->render();
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
            $acta_confidencial = acta_confidencial::where('numero', 'LIKE', "%$keyword%")
                ->orWhere('codigo_documento', 'LIKE', "%$keyword%")
                ->orWhere('nombre_documento', 'LIKE', "%$keyword%")
                ->orWhere('numero_revision', 'LIKE', "%$keyword%")
                ->orWhere('nombre_responsable', 'LIKE', "%$keyword%")
                ->orWhere('firma_responsable', 'LIKE', "%$keyword%")
                ->orWhere('fecha_entrega', 'LIKE', "%$keyword%")
                ->orWhere('tipo_documento', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $acta_confidencial = acta_confidencial::latest()->paginate($perPage);
        }

        return view('acta_confidencial.acta_confidencial.index', compact('acta_confidencial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('acta_confidencial.acta_confidencial.create');
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
        
        acta_confidencial::create($requestData);

        return redirect('acta_confidencial')->with('flash_message', 'acta_confidencial added!');
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
        $acta_confidencial = acta_confidencial::findOrFail($id);

        return view('acta_confidencial.acta_confidencial.show', compact('acta_confidencial'));
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
        $acta_confidencial = acta_confidencial::findOrFail($id);

        return view('acta_confidencial.acta_confidencial.edit', compact('acta_confidencial'));
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
        
        $acta_confidencial = acta_confidencial::findOrFail($id);
        $acta_confidencial->update($requestData);

        return redirect('acta_confidencial')->with('flash_message', 'acta_confidencial updated!');
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
        acta_confidencial::destroy($id);

        return redirect('acta_confidencial')->with('flash_message', 'acta_confidencial deleted!');
    }
}
