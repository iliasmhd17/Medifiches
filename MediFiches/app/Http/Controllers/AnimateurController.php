<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AnimateurController extends Controller
{
    public function viewAnimateur(Request $request){
        return view('viewAnimateur');
    }

    public function createAnimateur(Request $request){
        $validator = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
        ]);
    
        // If validation fails, it will automatically redirect back with errors.
        User::createAnimateur($validator);
        return redirect()->route('view_Animateur');
    }

}