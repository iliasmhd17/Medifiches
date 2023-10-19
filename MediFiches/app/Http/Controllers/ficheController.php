<?php

namespace App\Http\Controllers;

class ficheController extends Controller {
    
    public function display_record() { // reçoit un id,  record::get(1), 
        $childLastName = "Ozkara";
        $childFirstName = "Zeki JR";
        $allergies = "Kiwi, Connerie";
        $values = ["childLastName" => $childLastName, 
                   "childFirstName" => $childFirstName, 
                   "allergies" => $allergies];
        return view("animateur/fiche_medicale", compact("values"));
    }
}