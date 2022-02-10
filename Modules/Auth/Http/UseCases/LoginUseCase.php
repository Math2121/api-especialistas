<?php

namespace Modules\Auth\Http\UseCases;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class LoginUseCase
{


    public function execute(string $email, string $password, string $type)
    {
        $validateMail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$validateMail) {
            throw new Exception("Digite um email válido");
        }
        $findByEmail = User::where('email',$email)->first();
        if (!$findByEmail) {
            throw new Exception('Seu cadastro não foi localizado.');
        }

        if (!Hash::check($password, $findByEmail->password)) {
            throw new Exception('Senha incorreta.');
        }


        $user = $findByEmail;
       
        if ('pending' == $user->status) {
            throw new Exception("Confirme seu cadastro através do email.");
        }

        if ('offline' == $user->status) {
            throw new Exception('Usuário bloqueado. Entre em contato com o suporte.');
        }

        if ('confirmed' == $user->status) {
            throw new Exception('Aguarde sua conta ser liberada por nossa equipe.');
        }

        if ($type != $user->type) {
            $stringtype = $type == 'specialist' ? 'especialista' : 'aluno';
            throw new Exception("Você não tem permissão para logar como {$stringtype}.");
        }

        $token = $user->createToken('api-token')->plainTextToken;

        return ['user' => $user, 'token' => $token];
    }
}
