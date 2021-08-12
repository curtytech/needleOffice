<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicos;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class pdfController extends Controller
{
    public function geraPdf($id)
    {
        $servicos = Servicos::findOrFail($id);
        // return view('servicos.pdf', ['servicos' => $servicos]);

        $pdf = PDF::loadView('servicos/pdf', compact('servicos'));

        return $pdf->setPaper('a4')->stream('Nota.pdf');

        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf($options);
    }
}
