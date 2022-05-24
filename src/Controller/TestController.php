<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
//    /**
//     * @Route("/", name="home_page")
//     */
    public function indexAction(): \Symfony\Component\HttpFoundation\Response
    {
        $name = ['variable' => 123456];
        return $this->render(
            'test/index.html.twig',
            $name
        );
    }
}