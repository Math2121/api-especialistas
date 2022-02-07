<?php

namespace App\Http\Controllers;

use App\Http\Services\VerificationService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Crypt;

class VerificationController extends Controller
{
    //


    public function index($token): JsonResponse
    {
        $token = Crypt::decryptString($token);
        $verificationService = new VerificationService();
        if (!$token) {
            return response()->json(['Token inválido'], 403);
        }
        try {
            $verificationService->findUser($token);
            $verificationService->checkType($token);
            $user = $verificationService->execute($token);
            return response()->json(['user' => $user], 200);
        } catch (Exception  $e) {
            return response()->json(['error' => $e->getMessage(), 'user' => false], 403);
        }
    }
}
