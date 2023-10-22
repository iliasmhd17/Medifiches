<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicalController extends Controller
{
    public function getDbRecords(){
        $data = DB::select('SELECT * FROM medical_cards');
        return view('medicalCards', ['data' => $data]);
    }
}
