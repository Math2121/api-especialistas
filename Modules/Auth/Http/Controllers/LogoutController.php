<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class LogoutController extends Controller
{
    
    public function index():JsonResponse
    {
      auth()->user()->tokens()->delete();

      return response()->json(['success'=>'Usuário deslogado'],200);
    }

   
}
