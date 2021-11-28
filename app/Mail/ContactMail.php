<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable
{
    private $form;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form)
    {
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
            ->subject($this->form['subject'])
            ->markdown('emails.contact-form', [
                'email' => $this->form['email'],
                'name' => $this->form['name'],
                'message_content' => $this->form['message'],
            ]);
    }
}
