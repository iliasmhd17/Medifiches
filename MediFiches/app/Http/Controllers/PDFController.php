<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Models\Infos_Pdf;
use App\Models\MedicalCard;
use App\Models\Person;
use Dompdf\Dompdf;
use Dompdf\Options;

class PDFController extends Controller
{

    public function generatePDF()
    {
        $data = MedicalCard::find(123456789);
        $info = Person::find(123456789);
        //devoir faire ca pour l'élève récupéré via l'url pour chaque table

        if ($data && $info) {
            $pdf = PDF::loadView('pdf', compact('data', 'info'));

            //accéder à l'instance Dompdf du PDF généré
            $dompdf = $pdf->getDomPDF();

            // Configuration des options Dompdf
            $options = $dompdf->getOptions();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isPhpEnabled', true);
            $options->set('debug', true);

            // Chemin vers le répertoire public
            $webRoot = public_path();
            $html2 = view('pdf', compact('data', 'info'))->render();
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
            $filename = $info['last_name'] . '_' . $info['first_name'] . '.pdf';
            return $pdf->download($filename);
        } else {
            return redirect()->route('fiche-medicale')->with('error', 'Aucune donnée trouvée pour préremplir le formulaire.');
        }
    }

}