<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mpdf\Mpdf;
use App\Personal;
 
class PdfController extends Controller
{
    public function getIndex()
    {
        return view('pdf.index');
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



        $personal = Personal::findOrFail($id);
        
      
        if($accion=='html'){
            return view('pdf.generar',compact('personal'));
        }else{
            $html = view('pdf.generar',compact('personal'))->render();
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
            // "format" => "A4",
            "format" => [264.8,188.9],
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
}