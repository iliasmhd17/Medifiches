<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Models\Infos_Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = Infos_Pdf::find(1);

        if ($data) {
            $pdf = PDF::loadView('fiche', compact('data'));

            $filename = $data['nom'] . '_' . $data['prénom'] . '.pdf';
            return $pdf->download($filename);
        } else {
            return redirect()->route('form')->with('error', 'Aucune donnée trouvée pour préremplir le formulaire.');
        }
    }

    public function showForm(Request $request)
    {
        $data = Infos_Pdf::find(1); 

        if ($data) {
            return view('generate-pdf', compact('data'));
        } else {
            return redirect()->route('form')->with('error', 'Aucune donnée trouvée pour préremplir le formulaire.');
        }
    }

}
