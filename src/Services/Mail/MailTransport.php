<?php

namespace App\Services\Mail;

class MailTransport
{
    private iterable $mailers = [];

    public function __construct($mailers)
    {
        $this->mailers = $mailers;
    }

    public function sendWithAllMailers()
    {
        foreach ($this->mailers as $mailer){
            $mailer->send();
        }
    }
}