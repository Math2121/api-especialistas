<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;
    private string $token;
    private string $firstname;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $token, string $firstname)
    {
        //
        $this->token = $token;
        $this->firstname = $firstname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Recuperação de senha')
        ->from('matheusdepaula527@gmail.com','Teste')
        ->view('mail.forgot_password')->with(['firstname' => $this->firstname, 'token' => $this->token]);
    }
}
