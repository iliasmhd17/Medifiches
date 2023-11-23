<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Socialite;


class registerGoogleController extends Controller
{
    public function registerGoogle (Request $request) {
        // Les informations provenant du provider
        $data = Socialite::driver('google')->user();
// token
        $token = $data->token;

// Les informations de l'utilisateur
        //$id = $data->getId();
        $name = $data['given_name'];
        $nickname = $data['family_name'];
        //$password = Hash::make('12345678910111213');
        $email = $data->getEmail();


         User::create([
            'name' => $name,
            'last_name' => $nickname,
            'national_number' => '12345678955',
            'email' => $email,
            'password' => Hash::make('12345678910111213'),
        ]);

        return view('dashboard');
        //$avatar = $data->getAvatar();

//...
    	
    }
}
