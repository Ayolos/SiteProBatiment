<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->from('pierre@renovetvous.eu')
            ->subject('[Assistance Renov&Vous] Message de contact: ' . $this->formData['subject'])
            ->view('emails.contact', ['data' => $this->formData]);
    }
}
