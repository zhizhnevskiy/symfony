<?php

namespace App\Services\Mail;

class ThirdMailer implements MailerInterface
{
    public function send()
    {
        echo "Send from Third Mailer\n";
    }
}