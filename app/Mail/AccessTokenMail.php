<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccessTokenMail extends Mailable
{
    use Queueable, SerializesModels;

    public $access_token;
    public $email;
    public $mail_message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($access_token,$email,$mail_message)
    {
        $this->access_token = $access_token;
        $this->email = $email;
        $this->mail_message = $mail_message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.access_token_mail')->subject("Api Access Token");
    }
}
