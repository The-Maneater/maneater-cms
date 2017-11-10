<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Feedback extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $mind;
    public $details;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $mind
     * @param $details
     */
    public function __construct($name, $email, $mind, $details)
    {
        $this->name = $name;
        $this->email = $email;
        $this->mind = $mind;
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.feedback');
    }
}
