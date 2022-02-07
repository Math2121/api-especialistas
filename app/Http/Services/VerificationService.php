<?php

namespace App\Http\Services;

use App\Models\User;
use Exception;

class VerificationService
{

    public function execute(string $token)
    {
        $user = User::find($token);
        $status = $user->type == 'specialist' ? 'confirmed' : 'online';
        $user->update(['status' => $status]);
        return $user;
    }

    public function findUser(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            throw new Exception('Usuário não encontrado');
        }
        return $user;
    }
    public function checkType($id)
    {
        $check = User::whereId($id)->firstOrFail();

        if (in_array($check->status, ['confirmed', 'online'])) {
            throw new Exception("Sua conta já foi confirmada!");
        }
        return $check;
    }
}
