<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmRegister extends Mailable
{
    use Queueable, SerializesModels;

    private User $user;
    private $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $token)
    {
        //
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Confirmação de Cadastro')
            ->from('matheusdepaula527@gmail.com','TEste')
            ->view('mail.confirm_register')->with(['user' => $this->user, 'token' => $this->token]);
    }
}
