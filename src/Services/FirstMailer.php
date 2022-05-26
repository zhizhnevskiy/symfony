<?php

namespace App\Services;

class FirstMailer
{
    public function sendMail($gift): string
    {
        return 'Send gift with ' . static::class . ' your gift is ' .
            $gift . ' dollars';
    }
}