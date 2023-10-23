<?php

namespace App\Http\Controllers;

class ficheController extends Controller {
    
    public function display_record() 
    { // reçoit un id,  record::get(1),
        //$record = MedicalRecord::getMedicalRecord($id); 
        return view("animateur/fiche_medicale");
    }

    public function display_form()
    {
        return view("animateur/fiche_medicale_create");
    }
}