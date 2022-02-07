<?php

use App\Http\Controllers\VerificationController;
use Illuminate\Http\Request;
use Modules\Register\Http\Controllers\RegisterStudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('register')->name('register.')->group(function () {
    Route::post('/student',[RegisterStudentController::class,'create']);
    Route::post('/specialist',[RegisterSpecialistController::class,'create']);
    Route::get('/verification/{token}',[VerificationController::class,'index'])->name('auth.verification');
});
