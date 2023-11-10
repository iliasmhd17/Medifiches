<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalCard;

class MedicalCardController extends Controller
{
    public function index()
    {
        $medicalCards = MedicalCard::getAllMedicalCards();
        return view('medicalcards.index', compact('medicalCards'));
    }

    public function create()
    {
        return view('medicalcards.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'national_number' => 'required',
            'can_participate' => 'required',
            'medical_record' => 'required',
            'tetanos_protected' => 'required',
            'allergies' => 'required',
            'allergies_consequences' => 'required',
            'medecins' => 'required',
            'quantity_medecine' => 'required',
            'time_medecine' => 'required',
            'birth_date' => 'required',
            'additional_infos' => 'required',
            'street' => 'required',
            'no' => 'required',
            'mailbox' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);
        
        print("validated data: "+$data['national_number']);
       
        MedicalCard::createMedicalCard($data);

        return redirect()->route('medicalcards.index');
    }

    public function show($id)
    {
        $medicalCard = MedicalCard::getMedicalCardById($id);
        return view('medicalcards.show', compact('medicalCard'));
    }

    public function edit($id)
    {
        $medicalCard = MedicalCard::getMedicalCardById($id);
        return view('medicalcards.edit', compact('medicalCard'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'national_number' => 'required',
            'can_participate' => 'required',
            'medical_record' => 'required',
            'tetanos_protected' => 'required',
            'allergies' => 'required',
            'allergies_consequences' => 'required',
            'medecins' => 'required',
            'quantity_medecine' => 'required',
            'time_medecine' => 'required',
            'birth_date' => 'required',
            'additional_infos' => 'required',
            'street' => 'required',
            'no' => 'required',
            'mailbox' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        MedicalCard::updateMedicalCard($id, $data);

        return redirect()->route('medicalcards.index');
    }

    public function destroy($id)
    {
        MedicalCard::deleteMedicalCard($id);
        return redirect()->route('medicalcards.index');
    }
}
