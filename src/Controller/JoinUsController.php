<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JoinUsController extends AbstractController
{
    #[Route('/join/us', name: 'app_join_us')]
    public function index(): Response
    {
        return $this->render('join_us/index.html.twig', [
            'controller_name' => 'JoinUsController',
        ]);
    }
}
