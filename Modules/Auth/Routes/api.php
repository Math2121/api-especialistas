<?php


use Modules\Auth\Http\Controllers\ForgotPasswordController;
use Modules\Auth\Http\Controllers\LoginStudentController;
use Modules\Auth\Http\Controllers\LogoutController;
use Modules\Auth\Http\Controllers\RecoverPasswordController;

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

Route::prefix('login')->group(function () {
    Route::post('/student', [LoginStudentController::class, 'index']);
    Route::post('/specialist', [LoginSpecialistController::class, 'index']);
});
Route::post("/password/forgot", [ForgotPasswordController::class, 'index']);

Route::get("/password/recover/{token}", [RecoverPasswordController::class, 'index'])->name('password.recover');

Route::put("/password/reset/{token}", [RecoverPasswordController::class, 'resetPassword'])->name('password.reset');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [LogoutController::class, 'index']);
});
