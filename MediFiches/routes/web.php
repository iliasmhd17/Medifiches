<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ficheController;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\MedicalController;

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

Route::post('/generate-pdf', [PDFController::class, 'generatePDFs'])->name('generate-pdf');

Route::get('/fiche-medicale',[ficheController::class, "display_record"]);

Route::get('formulaire', [ficheController::class, "display_form"]);
Route::get('/fiches',[MedicalController::class,'getDbRecords'])->name('fiches');
Route::get('/fiches/details/{id}',[MedicalController::class,'getCardDetails']);

