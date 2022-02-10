<?php

namespace Modules\Auth\Http\UseCases;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Crypt;

class RecoverPasswordUseCase
{

    public function execute(string $token)
    {
        try {
            if ($token) {
                $decodeToken = unserialize(base64_decode($token));
                
                if (!$decodeToken) {
                    throw new Exception("Token inválido");
                }
                if ($decodeToken['expires'] < time()) {
                    throw new \Exception("Token Expirado! Solicite um novo link para alterar sua senha.");
                }
                $user = User::where('id', $decodeToken['token'])->first();
          
                if (!$user) {
                    throw new \Exception("Usuário não encontrado!");
                }
                $userResponse = ['username' => $user->firstname,'email'=>$user->email];
                return ['token' => $token, 'user' => $userResponse];
            }
        } catch (Exception $th) {
            return throw new Exception($th);
        }
    }
}
