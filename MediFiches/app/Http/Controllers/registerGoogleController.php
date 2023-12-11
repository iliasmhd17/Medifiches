<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Laravel\Socialite\Facades\Socialite;


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
        try {
            if (User::where('email', $email)->exists()) {
                $user = User::where('email', $email)->first();
                Auth::login($user);
                return redirect('/dashboard');
            }
        } catch (Exception $e) {
            return redirect('/dashboard');
        }
        $user = User::create([
            'name' => $name,
            'last_name' => $nickname,
            'national_number' => '12345678955',
            'email' => $email,
            'password' => Hash::make('12345678910111213'),
        ]);
        $user->markEmailAsVerified();
        Auth::login($user);

        return redirect('/dashboard');
        //$avatar = $data->getAvatar();

//...
    	
    }
}
