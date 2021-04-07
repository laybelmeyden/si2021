<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;
    public $msg__experts;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg__experts)
    {
        $this->msg__experts=$msg__experts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.mailDraft');
    }
}
