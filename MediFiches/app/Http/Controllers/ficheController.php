<?php

namespace App\Http\Controllers;
use App\Models\Infos_Pdf; 
use App\Models\MedicalCard;


class ficheController extends Controller {
    
    public function display_record() 
    { 
        $data = Infos_Pdf::find(1); 
        $medical_card = MedicalCard::find(123456789);

        return view("animateur/fiche_medicale", compact('data','medical_card'));
    }

    public function display_form()
    {
        return view("animateur/fiche_medicale_create");
    }
    public function display_testing()
    {
        return view("testing_form");
    }
}