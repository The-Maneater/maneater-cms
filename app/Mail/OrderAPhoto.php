<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderAPhoto extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $photoLink;
    public $size;
    public $comments;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $photoLink
     * @param $size
     * @param $comments
     */
    public function __construct($name, $email, $photoLink, $size, $comments)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->photoLink = $photoLink;
        $this->size = $size;
        $this->comments = $comments;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order-a-photo');
    }
}
