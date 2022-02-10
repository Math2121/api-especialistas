<?php

namespace Modules\Auth\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Auth\Http\Requests\ForgotPasswordRequest;
use Modules\Auth\Http\UseCases\ForgotPasswordUseCase;

class ForgotPasswordController extends Controller
{

    public function index(ForgotPasswordRequest $request): JsonResponse
    {

        $forgotPasswordUseCase = new ForgotPasswordUseCase();

        try {
            $forgotPasswordUseCase->execute($request->email);
            return response()->json(['success' => 'Enviamos um email para dar continuidade na sua solicitação!'], 200);
        } catch (Exception $e) {
            return response()->json(['err' => $e->getMessage()], 500);
        }
    }
}
