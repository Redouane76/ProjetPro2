<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PremiereController extends AbstractController
{
    #[Route('/premiere', name: 'premiere')]
    public function index(): Response
    {
        return $this->render('premiere/index.html.twig', [
            'nom' => 'Hello World !dd',
        ]);
    }
}
