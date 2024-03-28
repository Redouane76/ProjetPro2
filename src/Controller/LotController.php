<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Lot;
use Symfony\Component\HttpFoundation\Request;


class LotController extends AbstractController
{
    #[Route('lot/afficher/{dateEnchere?}', name: 'app_afficher_enchere')]
    public function afficherLot(EntityManagerInterface $entityManager, Request $request, ?string $dateEnchere = null): Response
    {
        // Logique pour afficher les lots avec une date d'enchère spécifique
        if ($dateEnchere !== null && $dateEnchere !== '') {
            $dateEnchereObj = \DateTime::createFromFormat('Y-m-d', $dateEnchere);
            $dateEnchereObj->setTime(0, 0);
            $lotRepository = $entityManager->getRepository(Lot::class);
            $lots = $lotRepository->findBy(['dateEnchere' => $dateEnchereObj]);

            return $this->render('lot/afficher.html.twig', [
                'lots' => $lots,
                'dateEnchere' => $dateEnchereObj,
            ]);
        }

        // Logique pour afficher les lots sans date d'enchère
        $lotRepository = $entityManager->getRepository(Lot::class);
        $lotsSansDateEnchere = $lotRepository->findBy(['dateEnchere' => null]);

        return $this->render('lot/afficher.html.twig', [
            'lots' => $lotsSansDateEnchere,
            'dateEnchere' => null
        ]);
    }

    #[Route('/lots', name: 'app_afficher_tous_lots')]
    public function afficherTousLots(EntityManagerInterface $entityManager): Response
    {
        $lotRepository = $entityManager->getRepository(Lot::class);
        $lots = $lotRepository->findAll();

        return $this->render('lot/afficher_tous_lots.html.twig', [
            'lots' => $lots,
        ]);
    }

}