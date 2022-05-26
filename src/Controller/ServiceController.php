<?php

namespace App\Controller;


use App\Services\Mail\MailTransport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ServiceController extends AbstractController
{
    #[Route('/service', name: 'service')]
    public function index(MailTransport $mailTransport): Response
    {
        $mailTransport->sendWithAllMailers();
        return new Response();
    }
}
