<?php

use App\Http\Controllers\AnimateurController;
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
    return view('welcome');
})->name('home');



 Route::middleware([
     'auth:sanctum',
     config('jetstream.auth_session'),
     'verified',
 ])->group(function () {
     Route::get('/dashboard', function () {
         return view('dashboard');
     })->name('dashboard');
 });
 
// Route::get('fiche-medicale',[ficheController::class, "display_record"]);
Route::post('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
Route::get('formulaire', [ficheController::class, "display_form"])->name('record_form');
Route::get('/fiches',[MedicalController::class,'getDbRecords'])->name('records');
Route::get('/fiches/details/{id}',[MedicalController::class,'getCardDetails']);
Route::post('/create-record', [MedicalController::class, 'createRecord'])->name('create_record');
Route::post('/animateur/createAnimateur',[AnimateurController::class,'createAnimateur'])->name('create_animateur');
Route::post('/delete_record',[MedicalController::class,'deleteRecord'])->name('delete_record');
Route::get('/animateur',[AnimateurController::class,'viewAnimateur'])->name('view_Animateur');
//Route::post('/create-testing', [MedicalController::class, 'create_testing'])->name('create_testing');
//Route::get('/testing', [ficheController::class, "display_testing"])->name('testing_form');

