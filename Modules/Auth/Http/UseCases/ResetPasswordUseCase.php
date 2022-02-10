<?php

namespace Modules\Auth\Http\UseCases;

use App\Models\User;
use Exception;

class ResetPasswordUseCase
{



    public function execute(string $token, string $password, string $repeatPassword)
    {
        $decodeToken = unserialize(base64_decode($token));
        try {
            if (!$decodeToken) {
                throw new Exception("O token utilizado é inválido!");
            }

            if ($decodeToken['expires'] < time()) {
                throw new Exception(
                    'Token Expirado! Solicite um novo link para alterar sua senha.'
                );
            }

            $user =  $user = User::where('id', $decodeToken['token'])->first();
            if (!$user) {
                throw new Exception("Token Expirado! Solicite um novo link para alterar sua senha.");
            }

            if($password !== $repeatPassword){
                throw new Exception("As senhas digitadas não coincidem.");
            }
            $user->password = $password;
            $user->save();
            return true;
        } catch (Exception $th) {
            return throw new Exception($th);
        }
    }
}
