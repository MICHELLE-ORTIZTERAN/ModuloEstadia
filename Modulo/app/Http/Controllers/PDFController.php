<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function descargar(){
        
        $pdf = \PDF::loadView('kardex');
        return $pdf->download('kardex.pdf');
    }
}
