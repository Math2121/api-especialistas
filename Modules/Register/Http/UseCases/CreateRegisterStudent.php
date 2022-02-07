<?php

namespace Modules\Register\Http\UseCases;

use App\Mail\ConfirmRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Nette\Utils\Json;
use Throwable;

class CreateRegisterStudent
{
    function execute(Request $request)
    {
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'type' => 'student',
            'status' => 'pending',
        ]);

        try {
            $newId = Crypt::encryptString($user->id);
            Mail::to($user->email)->send(new ConfirmRegister($user, $newId));
            return ['success' => 'Pronto! Acesse seu email para confirmar o seu cadastro.'];
        } catch (Throwable $th) {
            return  ['error' => $th];
        }
    }
}
