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

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($access_token)
    {
        $this->access_token = $access_token;

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
