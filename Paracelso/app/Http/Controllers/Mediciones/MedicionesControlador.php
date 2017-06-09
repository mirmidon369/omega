<?php

namespace App\Http\Controllers\Mediciones;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\mediciones;
use Dompdf\Dompdf;
use Dompdf\Options;
class MedicionesControlador extends Controller
{
    public function reportemediciones($id_persona) 
    {
        //
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $domPdf->setOptions($options);
        $domPdf->output();
        //
        $data = $this->getData($id_persona);
        $date = date('Y-m-d');
        $rptmediciones = "6666666666";
        $view =  \View::make('mediciones.RptMediciones', compact('data', 'date', 'rptmediciones'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $view;
        return $pdf->stream('rptmediciones');
    }
    public function getData($id_persona) 
    {	$mediciones = mediciones::where('id_persona',$id_persona)->orderBy('created_at','desc')->get();
        /*$data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];*/
        //dd($mediciones);
        return $mediciones;
    }
}
