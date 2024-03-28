<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'menu')]
    public function index(): Response
    {
        $menuItems=[
            ['label' => 'Accueil', 'route' => 'menu' ],
            ['label' => 'A propos', 'route' => 'propos' ],
            ['label' => 'Pêche du jour', 'route' => 'pechejour' ],
            ['label' => 'Facture', 'route' => 'facture' ],
            ['label' => 'Contactez-Nous', 'route' => 'contact' ],
        ];
        return $this->render('menu/index.html.twig', [
            'menuItems' => $menuItems
        ]);
    }

    #[Route('/propos', name: 'propos')]
    public function propos(): Response
    {
        $menuItems=[
            ['label' => 'Accueil', 'route' => 'menu' ],
            ['label' => 'A propos', 'route' => 'propos' ],
            ['label' => 'Pêche du jour', 'route' => 'pechejour' ],
            ['label' => 'Facture', 'route' => 'facture' ],
            ['label' => 'Contactez-Nous', 'route' => 'contact' ],
        ];
        return $this->render('menu/propos.html.twig', [
            'menuItems' => $menuItems
        ]);
    }

    #[Route('/pechejour', name: 'pechejour')]
    public function pechejour(): Response
    {
        $menuItems=[
            ['label' => 'Accueil', 'route' => 'menu' ],
            ['label' => 'A propos', 'route' => 'propos' ],
            ['label' => 'Pêche du jour', 'route' => 'pechejour' ],
            ['label' => 'Facture', 'route' => 'facture' ],
            ['label' => 'Contactez-Nous', 'route' => 'contact' ],
        ];
        return $this->render('menu/pechejour.html.twig', [
            'menuItems' => $menuItems
        ]);
    }

    #[Route('/facture', name: 'facture')]
    public function facture(): Response
    {
        $menuItems=[
            ['label' => 'Accueil', 'route' => 'menu' ],
            ['label' => 'A propos', 'route' => 'propos' ],
            ['label' => 'Pêche du jour', 'route' => 'pechejour' ],
            ['label' => 'Facture', 'route' => 'facture' ],
            ['label' => 'Contactez-Nous', 'route' => 'contact' ],
        ];
        return $this->render('menu/facture.html.twig', [
            'menuItems' => $menuItems
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        $menuItems=[
            ['label' => 'Accueil', 'route' => 'menu' ],
            ['label' => 'A propos', 'route' => 'propos' ],
            ['label' => 'Pêche du jour', 'route' => 'pechejour' ],
            ['label' => 'Facture', 'route' => 'facture' ],
            ['label' => 'Contactez-Nous', 'route' => 'contact' ],
        ];
        return $this->render('menu/contact.html.twig', [
            'menuItems' => $menuItems
        ]);
    }


}
