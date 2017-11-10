<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkForUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $since;
    public $email;
    public $interest;


    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $since
     * @param $email
     * @param $interest
     */
    public function __construct($name, $since, $email, $interest)
    {
        //
        $this->name = $name;
        $this->since = $since;
        $this->email = $email;
        $this->interest = $interest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.work-for-us');
    }
}
