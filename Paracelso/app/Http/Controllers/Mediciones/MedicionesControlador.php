<?php

namespace App\Http\Controllers\Mediciones;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\mediciones;
use PDF;
class MedicionesControlador extends Controller
{
    public function reportemediciones($id_persona) 
    {
        //
        /*$options = new Options();
        $options->setIsRemoteEnabled(true);
        $domPdf->setOptions($options);
        $domPdf->output();*/
        //
        //PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $mediciones = $this->getdata($id_persona);
        $date = date('Y-m-d');
        $view =  \View::make('mediciones.RptMediciones', compact('mediciones', 'date', 'rptmediciones'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf=PDF::setOptions(['isRemoteEnabled'=>'true' ,'dpi' => 50, 'defaultFont' => 'sans-serif']);
        $pdf->loadHTML($view)->setPaper('A4', 'portrait');
        //return $view;
        return $pdf->stream('rptmediciones');
    }
    public function getData($id_persona) 
    {	$mediciones = mediciones::where('id_persona',$id_persona)->orderBy('created_at','desc')->get();
        return $mediciones;
    }
}
