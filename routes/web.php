<?php

use App\Http\Controllers\ExportController;
use App\Livewire\ScholarshipForm;
use App\Livewire\Terms;
use App\Livewire\TransferForm;
use App\Models\Student;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode as FacadesQrCode;

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

Route::view('/', 'welcome');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


//add logic to either use here or there.
// Route::get('/apply', ScholarshipForm::class)->middleware(['auth']);
Route::view('/apply','closed');

// function(){
//     return ('closed');
// });

Route::get('/thank-you', function(){
    return view('thankyou');
});
//         $student = Student::where('user_id', auth()->user()->id)->first();

// dd(empty($student));
// Route::get('/terms', Terms::class)->name('terms');
Route::view('/terms', 'closed');

// Route::get('/transfer-student/{id}/edit', TransferForm::class)->name('transfer.student');

require __DIR__.'/auth.php';

Route::get('/export-pdf/{applicantid}',[ExportController::class,'exportSinglePdf'])->name('generate-pdf.single');
