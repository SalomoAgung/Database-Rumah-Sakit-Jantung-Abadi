<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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
    return view('patient.form');
});



// Route::get('/patient-info', [PatientController::class, 'showForm'])->name('patient.form');
// Route::post('/patient-info', [PatientController::class, 'getTransactionDetails'])->name('patient.details');
Route::get('/patient/form', function () {
    return view('patient.form');
})->name('patient.form');

Route::post('/patient/details', [PatientController::class, 'showDetails'])->name('patient.details');