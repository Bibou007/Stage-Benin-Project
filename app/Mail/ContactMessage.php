<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;
public $name;
public $email;
public $subject;
public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$subject,$msg)
    {
        $this->name = $name;
        $this->email=$email;
        $this->subject=$subject;
        $this->msg=$msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email-message');
    }
}
