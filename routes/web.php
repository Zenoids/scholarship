<?php

use App\Livewire\ScholarshipForm;
use App\Livewire\Terms;
use App\Livewire\TransferForm;
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



Route::get('/apply', ScholarshipForm::class)->middleware(['auth']);

Route::get('/thank-you', function(){
    return view('thankyou');
});
//         $student = Student::where('user_id', auth()->user()->id)->first();

// dd(empty($student));
Route::get('/terms', Terms::class)->name('terms');
Route::get('/transfer-student/{id}/edit', TransferForm::class)->name('transfer.student');

require __DIR__.'/auth.php';
