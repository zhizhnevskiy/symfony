<?php

namespace App\Controller;

use App\Entity\Page;
use App\Services\RandomGiftSender;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    #[Route('/', name: 'home_page')]
    public function index(
        ManagerRegistry    $doctrine,
        ContainerInterface $parameterBag,
        RandomGiftSender   $randomGiftSender
    ): Response
    {
        $test1 = $parameterBag->get('uploads_directory');
        $test2 = $parameterBag->get('locale');
        $result = $randomGiftSender->send();

//        Add new row in DB
//
//        $entityManager = $doctrine->getManager();
//
//        $page = new Page();
//        $page->setKeywords('favourite video')
//            ->setDescription('favourite description')
//            ->setTitle('favourite title')
//            ->setContent('Site for adding video');
//
//        // tell Doctrine you want to (eventually) save the Product (no queries yet)
//        $entityManager->persist($page);
//        // actually executes the queries (i.e. the INSERT query)
//        $entityManager->flush();

//        Get row from DB
        $homePage = $doctrine->getRepository(Page::class)
            ->find(1);

        return $this->render('page/index.html.twig', [
            'homePage' => $homePage,
            'result' => $result,
        ]);
    }
}
