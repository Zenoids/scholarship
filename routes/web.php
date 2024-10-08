<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\ScholarshipForm;
use App\Livewire\Terms;
use App\Livewire\TransferForm;
use App\Models\Scholarship;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

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
if(Scholarship::latest()->first()->status==true) {
    Route::get('/apply', ScholarshipForm::class)->middleware(['auth']);
Route::get('/terms', Terms::class)->name('terms');
}
else{
    Route::view('/apply','closed');
    Route::view('/terms', 'closed');
}


// function(){
//     return ('closed');
// });
//excel
Route::get('students/export/', [DashboardController::class, 'exportAll'])->name('all.export');
Route::get('students/exportsingle/{id}', [DashboardController::class, 'exportSingle'])->name('single.export');
Route::get('students/exportselected/{ids}', [DashboardController::class, 'exportSelected'])->name('selected.export');
//pdf
Route::get('students/export/pdf', [DashboardController::class, 'exportAllPdf'])->name('allpdf.export');
Route::get('students/exportsingle/pdf/{id}', [DashboardController::class, 'exportSinglePdf'])->name('singlepdf.export');
Route::get('students/exportselected/pdf/{ids}', [DashboardController::class, 'exportSelectedPdf'])->name('selectedpdf.export');

Route::get('/thank-you', function(){
    return view('thankyou');
});
//         $student = Student::where('user_id', auth()->user()->id)->first();

// dd(empty($student));

// Route::get('/transfer-student/{id}/edit', TransferForm::class)->name('transfer.student');

require __DIR__.'/auth.php';
