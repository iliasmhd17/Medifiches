<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MedicalCard;
use App\Models\Testing;
use App\Forms\RecordForm;
use Illuminate\Support\Facades\Validator;

class MedicalController extends Controller
{

    public function getDbRecords(){
     $data = DB::table('medical_cards')->get();
     $nbFiches = DB::table('medical_cards')->count();

        return view('medicalCards', compact('data', 'nbFiches'));
    }

    public function getCardDetails($id){

        $data = DB::table('medical_cards')
        ->where('national_number', $id)
        ->get();

        $children = DB::table('persons')
        ->where('national_number', $id)
        ->get();

        return view('medicalCardsDetails',compact('data','children'));
    }

    public function createRecord(Request $request)
    {

        $validator = Validator::make($request->all(), RecordForm::rules());

        // Check if the validation fails
        if ($validator->fails()) {
            // Log the validation errors
            \Log::error($validator->errors());

            // Redirect back with validation errors
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, proceed with your logic
        $data = $request->all();
        MedicalCard::createMedicalCard($data);
        return redirect('fiches');
    }

}
