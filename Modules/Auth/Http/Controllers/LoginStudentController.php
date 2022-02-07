<?php

namespace Modules\Auth\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Auth\Http\Requests\LoginRequest;

class LoginStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(LoginRequest $request)
    {
        $loginStudentUseCase = new LoginUseCase();

        try {
        $loginStudentUseCase->execute($request->all());
        return response()->json(['Usuário autenticado com sucesso',200]);
        } catch (Exception $e) {
            return response()->json(['err'=>$e->getMessage(),403]);
        }
    }

    
}
