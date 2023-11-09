<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MedicalCard;
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
        $national_number = $request->input('national_number');
        $can_participer = $request->input('can_participer');
        $medical_record = $request->input('medical_record');
        $tetanos = $request->input('tetanos');
        $allergies = $request->input('allergies');
        $consequences = $request->input('consequences');
        $medic = $request->input('medic');
        $qMedic = $request->input('qMedic');
        $fMedic = $request->input('fMedic');
        $birth_date = $request->input('birth_date');
        $street = $request->input('street');
        $no = $request->input('no');
        $mailbox = $request->input('mailbox');
        $contry = $request->input('contry');
        $city = $request->input('city');
        $data = [$national_number,
        $can_participer, $medical_record, $tetanos, $allergies, $consequences,
        $medic, $qMedic, $fMedic, $birth_date, $street, $no, $mailbox, $contry, $city];
        MedicalCard::createMedicalCard($data);
        return redirect('fiches');
    }

}
