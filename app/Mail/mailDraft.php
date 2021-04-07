<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailDraft extends Mailable
{
    use Queueable, SerializesModels;
    public $msg__experts;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $msg__experts)
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
        return $this->from('socialidea.mts@yandex.ru')->view('email.mailDraft');
    }
}
