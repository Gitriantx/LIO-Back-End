<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $verificationCode;
    public $expiration;

    /**
     * Create a new message instance.
     *
     * @param  $user
     * @return void
     */
    public function __construct($data, $verificationCode, $expiration)
    {
        $this->data = $data;
        $this->verificationCode = $verificationCode;
        $this->expiration = $expiration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.verification')
            ->subject('Verification Code');
    }
}
