<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('medicalCardsDetails', ['data' => $data]);
    }

}
