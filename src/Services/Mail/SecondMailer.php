<?php

namespace App\Services\Mail;

class SecondMailer implements MailerInterface
{
    public function send()
    {
        echo "Send from Second Mailer\n";
    }
}