<?php

namespace App\Http\Controllers\Mediciones;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\mediciones;
class MedicionesControlador extends Controller
{
    public function reportemediciones($id_persona) 
    {
        $data = $this->getData($id_persona);
        $date = date('Y-m-d');
        $invoice = "6666666666";
        $view =  \View::make('mediciones.RptMediciones', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $view;
        return $pdf->stream('invoice');
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
