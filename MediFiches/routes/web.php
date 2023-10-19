<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use Barryvdh\DomPDF\Facade as PDF;


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
});

Route::post('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
Route::get('/form', [PDFController::class, 'showForm'])->name('form');

