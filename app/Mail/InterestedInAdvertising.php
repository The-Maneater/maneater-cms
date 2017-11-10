<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InterestedInAdvertising extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $company;
    public $phone;
    public $address;
    public $comments;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $company
     * @param $phone
     * @param $address
     * @param $comments
     */
    public function __construct($name, $company, $phone, $address, $comments)
    {
        $this->name = $name;
        $this->company = $company;
        $this->phone = $phone;
        $this->address = $address;
        $this->comments = $comments;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.advertising');
    }
}
