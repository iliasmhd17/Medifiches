<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MedicalCard;
use App\Models\Testing;
use App\Forms\RecordForm;
use App\Models\Children;
use Illuminate\Support\Facades\Validator;

class MedicalController extends Controller
{

    public function getDbRecords(){
     $data = DB::table('medical_cards')->get();
        return view('medicalCards', ['data' => $data]);
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
            

            // Redirect back with validation errors
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, proceed with your logic
        $data = $request->all();
        MedicalCard::createMedicalCard($data);
        $child_data = [
            'national_number' => $data['national_number'],
            'parent_1' => $data['email']
        ];
        Children::createChild($child_data);
        return redirect('fiches');
    }

}
