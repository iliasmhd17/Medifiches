<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Testing;
use App\Forms\RecordForm;
use App\Models\Children;
use Illuminate\Support\Facades\Validator;

class AnimateurController extends Controller
{
    public function createAnimateur(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=> ['required', 'email', 'max:255'],
        ]);
        User::createAnimateur($validator);
        return redirect('viewAnimateur');
    }

    public function viewAnimateur(Request $request){
        return view('viewAnimateur');
    }

}