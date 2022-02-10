<?php

namespace Modules\Auth\Http\UseCases;

use App\Mail\ForgotPassword;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordUseCase
{

    public function execute(string $email)
    {
        $validateMail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$validateMail) {
            throw new Exception("Digite um email válido");
        }

        $findByEmail = User::where('email', $email)->first();
        if (!$findByEmail) {
            throw new Exception('Seu cadastro não foi localizado.');
        }

        $user = $findByEmail;
        $expires = strtotime('+2 hours');
        $encryptToke = base64_encode(serialize(['token' => $user->id, 'expires' => $expires]));
     
        try {
            Mail::to($user->email)->send(new ForgotPassword($encryptToke, $user->firstname));
            return true;
        } catch (Exception $th) {
            throw new Exception($th);
        }
    }
}
