<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    public function simpleCard(string $title, string $content, string $buttonUrl, string $buttonText): Response
    {
        return $this->render('home/_simple_card.html.twig', [
            'title' => $title,
            'content' => $content,
            'buttonUrl' => $buttonUrl,
            'buttonText' => $buttonText,
        ]);
    }
}
