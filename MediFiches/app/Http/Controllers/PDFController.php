<?php
namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Models\MedicalCard;
use App\Models\Parents;
use App\Models\User;
use App\Models\Parental_Link;
use Dompdf\Dompdf;
use Dompdf\Options;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $data = MedicalCard::find($request->national_number);
        //devoir faire ca pour l'élève récupéré via l'url pour chaque table
        if ($data) {
            $parentalLink = Parental_Link::where('national_number', $request->national_number)->first();
            if ($parentalLink) {
                // Utiliser les adresses e-mail pour trouver les détails des parents
                // Car impossible de les lier avec l'auto-incrémentation de user qui est != du numéro_national
                $parent1Details = User::where('email', $parentalLink->parent_1)->first();
                $parent2Details = User::where('email', $parentalLink->parent_2)->first();
            } else {
                $parent1Details = $parent2Details = null;
            }
            $pdf = PDF::loadView('animateur/pdf', compact('data', 'parent1Details', 'parent2Details'));
            //accéder à l'instance Dompdf du PDF généré
            $dompdf = $pdf->getDomPDF();
            // Configuration des options Dompdf
            $options = $dompdf->getOptions();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isPhpEnabled', true);
            $options->set('debug', true);

            // Chemin vers le répertoire public
            $webRoot = public_path();

            $html2 = view('animateur/pdf', compact('data', 'parent1Details', 'parent2Details'))->render();
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
            $filename = $data->first_name . '_' . $data->last_name . '.pdf';
            return $pdf->download($filename);
        } else {
            return redirect()->route('records')->with('error', 'Aucune donnée trouvée pour préremplir le formulaire.');
        }
    }
}
