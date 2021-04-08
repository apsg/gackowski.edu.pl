<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $message;

    /**
     * ContactMail constructor.
     * @param $email
     * @param $name
     * @param $message
     */
    public function __construct(string $email, string $name, string $message)
    {
        $this->email = $email;
        $this->name = $name;
        $this->message = $message;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->markdown('emails.contact')
            ->replyTo($this->email)
            ->subject('Kontakt od ' . $this->name . "<$this->email>");
    }
}
