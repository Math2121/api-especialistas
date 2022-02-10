<?php

namespace Modules\Auth\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Crypt;
use Modules\Auth\Http\Requests\RecoverPasswordRequest;
use Modules\Auth\Http\UseCases\RecoverPasswordUseCase;
use Modules\Auth\Http\UseCases\ResetPasswordUseCase;

class RecoverPasswordController extends Controller
{

    public function index($token): JsonResponse
    {

        $recoverPasswordUseCase = new RecoverPasswordUseCase();
        try {
            $response = $recoverPasswordUseCase->execute($token);

            return response()->json(['success' => $response['token'], 'user' => $response['user']], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }

    public function resetPassword($token, RecoverPasswordRequest $request)
    {
        $recoverPasswordUseCase = new ResetPasswordUseCase();
        try {
             $recoverPasswordUseCase->execute($token, $request->password, $request->repeat_password);

            return response()->json(['success' => 'Senha alterada com sucesso!'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }
}
