<?php

namespace App\Services;

class RandomGiftSender
{
    private $string;
    private $mailer;
    private FirstMailer $firstMailer;

    public function __construct(
        $string,
        $mailer,
        FirstMailer $firstMailer
    )
    {
        $this->string = $string;
        $this->mailer = $mailer;
        $this->firstMailer = $firstMailer;
    }

    public function send(): string
    {
        $gift = rand(1, 100);
//        return $this->mailer->sendMail($gift);
        return $this->firstMailer->sendMail($gift);
    }
}