<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Models\Infos_Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;

class PDFController extends Controller
{

    public function generatePDF()
    {
        $data = Infos_Pdf::find(1);
        //devoir faire ca pour l'élève récupéré via l'url pour chaque table

        if ($data) {
            $pdf = PDF::loadView('pdf', compact('data'));

            //accéder à l'instance Dompdf du PDF généré
            $dompdf = $pdf->getDomPDF();

            // Configuration des options Dompdf
            $options = $dompdf->getOptions();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isPhpEnabled', true);
            $options->set('debug', true);

            // Chemin vers le répertoire public
            $webRoot = public_path();
            $html2 = view('fiche2', compact('data'))->render();
            // HTML avec arrière-plan d'image
            $html = '<html>
<head>
    <style>
        body {
            
        }
        .background {
            background-image: url(' . public_path('/images/scout.png') . ');
            background-size: 100px;
            background-position: top left;
            background-repeat: no-repeat;
            width: 100px;
            height: 100px; 
            
        }
    </style>
</head>
<body>
    <div class="background"></div>' . $html2 . '
</body>
</html>';


            // Chargement de l'HTML dans Dompdf
            $dompdf->loadHtml($html);
            $dompdf->setBasePath($webRoot);

            // Rendu du PDF
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Téléchargement du PDF
            $filename = $data['nom'] . '_' . $data['prénom'] . '.pdf';
            return $pdf->download($filename);
        } else {
            return redirect()->route('form')->with('error', 'Aucune donnée trouvée pour préremplir le formulaire.');
        }
    }

}