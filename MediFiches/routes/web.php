<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ficheController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('animateur/accueil');
});

Route::get('fiche-medicale',[ficheController::class, "display_record"]);

Route::get('formulaire', [ficheController::class, "display_form"]);