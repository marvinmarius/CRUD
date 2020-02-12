<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;



class PdfController extends Controller
{

    public function pdfForm()
    {
        return view('pdf_form');
    }
    public function pdfDownload(Request $request){


        $data =
            [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ];

        $pdf = PDF::loadView('pdf_download', $data);
        return $pdf->download('marius.pdf');
    }

}
