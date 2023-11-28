<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MedicalCard;
use App\Models\Testing;
use App\Forms\RecordForm;
use App\Models\Children;
use App\Models\Parental_Link;
use Illuminate\Support\Facades\Validator;

class MedicalController extends Controller
{

    public function getDbRecords(){
        $userEmail = Auth::user()->email;

        // Retrieve records from the medical_cards table where the email matches
        $data = MedicalCard::getUserEmail($userEmail);
        $nbFiches = $data->count();
        // $data = DB::table('medical_card')->where('email', $userEmail)->get();
        return view('medicalCards', compact('data', 'nbFiches'));
    }

    public function getCardDetails($id){

        $data = DB::table('medical_card')
        ->where('national_number', $id)
        ->get();

        $children = DB::table('medical_card')
        ->where('national_number', $id)
        ->get();

        $parent_infos = DB::table('parental_link')
        ->join('medical_card', 'national_number', '=', 'national_number')
        ->groupBy('national_number');
        return view('medicalCardsDetails',compact('data','children', 'parent_infos'));
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
            'parent_1' => Auth::user()->email,
        ];
        Parental_Link::createChild($child_data);
        return redirect('fiches');
    }

}
