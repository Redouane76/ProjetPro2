<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Facture;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Types\Types;

class FactureController extends AbstractController
{
    #[Route('/facture/afficher/{dateFacture?}', name: 'app_afficher_facture')]
    public function afficherFacture(EntityManagerInterface $entityManager, Request $request, ?string $dateFacture = null): Response
    {
        // Logique pour afficher les factures pour une date spécifique
        if ($dateFacture !== null && $dateFacture !== '') {
            $dateFactureObj = \DateTime::createFromFormat('Y-m-d', $dateFacture);
            $dateFactureObj->setTime(0, 0);
            $factureRepository = $entityManager->getRepository(Facture::class);
            $factures = $factureRepository->findBy(['dateFacture' => $dateFactureObj]);

            return $this->render('facture/afficherFactureDate.html.twig', [
                'factures' => $factures,
                'date' => $dateFactureObj->format('Y-m-d'), // Ajoutez la variable 'date'
            ]);
        }

    }

    #[Route('/factures', name: 'app_afficher_toutes_factures')]
    public function afficherToutesFactures(EntityManagerInterface $entityManager): Response
    {
        $factureRepository = $entityManager->getRepository(Facture::class);
        $factures = $factureRepository->findAll(); // Récupération de toutes les factures

        return $this->render('facture/afficher_toutes_factures.html.twig', [
            'factures' => $factures,
            'date' => null, // Ajoutez la variable 'date'
        ]);
    }
}
