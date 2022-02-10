<?php

namespace Modules\Auth\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Http\UseCases\LoginUseCase;

class LoginSpecialistController extends Controller
{
    
    public function index(LoginRequest $request): JsonResponse
    {
        $loginStudentUseCase = new LoginUseCase();


        try {
            $user = $loginStudentUseCase->execute($request->email, $request->password, 'specialist');

            $response = [
                'email' => $user['user']->email,
                'user' => $user['user']->firstname,
                'token' => $user['token']
            ];
            return response()->json(['success' => 'Usuário autenticado com sucesso', 'data' => $response], 201);
        } catch (Exception $e) {
            return response()->json(['err' => $e->getMessage()], 403);
        }
    }

   
}
