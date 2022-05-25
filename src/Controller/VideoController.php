<?php

namespace App\Controller;

use App\Entity\Video;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    #[Route('/show_videos', name: 'show_videos')]
    public function showVideos(ManagerRegistry $doctrine): Response
    {
        $showVideos = $doctrine
            ->getRepository(Video::class)
            ->findAll();
        return $this->render('video/showVideos.html.twig', [
            'showVideos' => $showVideos,
        ]);
    }

    #[Route('/show_video/{youtube_id}', name: 'show_video')]
    public function showOneVideo($youtube_id, ManagerRegistry $doctrine): Response
    {
        $video = $doctrine
            ->getRepository(Video::class)
            ->findBy([
                'youtube_id' => $youtube_id
            ]);
        return $this->render('video/showOneVideo.html.twig', [
            'video' => $video[0],
        ]);
    }

    #[Route('/add_video', name: 'add_video')]
    public function addVideo(): Response
    {
        return $this->render('video/addVideo.html.twig', [
            'controller_name' => 'VideoController',
        ]);
    }
}
