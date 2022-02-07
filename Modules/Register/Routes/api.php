<?php

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
Route::prefix('register')->group(function () {
    Route::post('/student',[RegisterStudentController::class,'create']);
});
