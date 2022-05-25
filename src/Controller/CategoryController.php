<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/add_category', name: 'add_category')]
    public function addCategory(): Response
    {
        return $this->render('category/addCategories.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/show_category', name: 'show_category')]
    public function showCategory(ManagerRegistry $doctrine): Response
    {
        $showCategories = $doctrine
            ->getRepository(Category::class)
            ->findAll();
        return $this->render('category/showCategories.html.twig', [
            'categories' => $showCategories
        ]);
    }
}
