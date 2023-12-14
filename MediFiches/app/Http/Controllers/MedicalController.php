<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MedicalCard;
use App\Forms\RecordForm;
use App\Models\FormField;
use App\Models\FormRule;
use App\Models\Parental_Link;
use Illuminate\Support\Facades\Validator;

class MedicalController extends Controller
{

    protected $form_fields;
    protected $form_rules;

    public function __construct()
    {
        $this->form_fields = FormField::getFields()->toArray();
        $this->form_rules = FormRule::getRules();
    }

    public function getDbRecords()
    {
        $user = Auth::user();
        $userEmail = $user->email;
        $data = [];
        // Retrieve records from the medical_cards table where the email matches
        if($user->role == 'Animator')
        {
            $data = MedicalCard::getAllMedicalCards();
        }else{
            $data = MedicalCard::getUserEmail($userEmail);
        }
        $nbFiches = $data->count();

        // foreach($this->form_rules as $rule)
        // {
        //     echo $rule; 
        // }
        return view('medicalCards', compact('data', 'nbFiches'));
    }

    public function getCardDetails($id)
    {

        $data = DB::table('medical_card')
            ->where('national_number', $id)
            ->get();

        $children = DB::table('medical_card')
            ->where('national_number', $id)
            ->get();

        $parent_infos = DB::table('parental_link')
            ->join('medical_card', 'national_number', '=', 'national_number')
            ->groupBy('national_number');

        $fields = $this->form_fields;

        // print_r($fields);
        return view('medicalCardsDetails', compact('data', 'children', 'parent_infos', 'fields'));
    }

    public function createRecord(Request $request)
    {
        $validator = Validator::make($request->all(), $this->form_rules);
    
        // Check if the validation fails
        if ($validator->fails()) {
            // Redirect back with validation errors
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            MedicalCard::createMedicalCard($request->all());
        } catch (\Exception $e) {
            // Gestion de l'exception si le numéro national existe déjà
            return redirect()->back()->withErrors(['national_number' => $e->getMessage()])->withInput();
        }    
        // If validation passes, proceed with your logic
        $data = $request->all();
    
        // Emergency contact of parent and doctor
        $data['emergency_contact_parent'] = $request->input('emergency_contact_parent');
        // $data['emergency_contact_doctor'] = $request->input('emergency_contact_doctor');
    
        // MedicalCard::createMedicalCard($data);
    
        $child_data = [
            'national_number' => $data['national_number'],
            'parent_1' => Auth::user()->email,
        ];
    
        Parental_Link::createChild($child_data);
    
        return redirect('fiches');
    }    

    public function deleteRecord(Request $request)
    {
        $data = $request->all();
        MedicalCard::deleteMedicalCard($data['national_number']);
        return redirect('fiches');
    }

    public function getRecordEditPage($id)
    {
        $data = MedicalCard::getMedicalCardById($id);
    }

    public function editRecord(Request $request)
    {
        $validator = Validator::make($request->all(), $this->form_rules);

        // Check if the validation fails
        if ($validator->fails()) {

            // Redirect back with validation errors
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, proceed with your logic
        $data = $request->all();
        MedicalCard::updateMedicalCard($data['national_number'], $data);
        return redirect('fiches/details/' . $data['national_number']);
    }

    public function display_form()
    {
        $formFields = $this->form_fields;
        return view("animateur/fiche_medicale_create",compact('formFields'));
    }
}
