<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    Route::get('/dashboard',[DoctorController::class,'Approve_Or_Not'])->name('Ask_For_Approval');
    Route::get('/ok',[DoctorController::class,'show'])->name('doctor');
    Route::get('/patients',[PatientController::class,'patient_reports'])-> name('patient'); // rn do get care of these two //
    Route::post('/doctor',[DoctorController::class,'create'])->name('doctor.remarks'); //this would be post the data // 



    

require __DIR__.'/auth.php';
