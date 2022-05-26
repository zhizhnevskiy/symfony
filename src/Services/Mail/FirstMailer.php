<?php

namespace App\Services\Mail;

class FirstMailer implements MailerInterface
{
    public function send()
    {
        echo "Send from First Mailer\n";
    }
}