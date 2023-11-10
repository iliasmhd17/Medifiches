<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MedicalCard;
use App\Models\Testing;

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
        //return view('medicalCardsDetails', ['data' => $data,'children ' => $children]);
        return view('medicalCardsDetails',compact('data','children'));
    }

    public function createRecord(Request $request) 
    {

        $data = $request->validate([
            'national_number' => 'required',
            'medical_record' => 'required',
            'birth_date' => 'required',
            'street' => 'required',
            'no' => 'required',
            'mailbox' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);
        print_r($data);
        MedicalCard::createMedicalCard($data);
        return redirect('fiches');
    }

    public function create_testing(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        // $testing = new Testing();
        // $testing->name = $request->name;
        // $testing->save();
        Testing::create($data);
    }

}
