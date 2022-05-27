<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpController extends AbstractController
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    #[Route('/http', name: 'app_http')]
    public function index(): Response
    {
        $response = $this->client->request(
            'GET',
            'http://localhost:5000/api/posts'
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $contentObject = $response->getContent();
        // $contentObject = '{"id":521583, "name":"symfony-docs", ...}'
        $contentArray = $response->toArray();
        // $contentArray = ['id' => 521583, 'name' => 'symfony-docs', ...]

        return $this->render('http/index.html.twig', [
            'request' => $contentArray,
        ]);
    }
}
