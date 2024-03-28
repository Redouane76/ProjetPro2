<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FactureRepository;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idFacture")]
    private ?int $idFacture = null;

    #[ORM\Column(type: "integer", name: "idAcheteur")]
    private $idAcheteur;

    #[ORM\Column(type: "date", name: "dateFacture")]
    private $dateFacture;

    #[ORM\Column(type: "decimal", precision: 10, scale: 2, name: "montantTotal")]
    private $montantTotal;

    #[ORM\Column(type: 'string', length: 20, name: "statutFacture")]
    private $statutFacture;

    #[ORM\Column(type: "date", name: "dateLimitePaiement")]
    private $dateLimitePaiement;

    // Ajout des getters et setters

    public function getIdFacture(): ?int
    {
        return $this->idFacture;
    }

    public function getIdAcheteur()
    {
        return $this->idAcheteur;
    }

    public function setIdAcheteur($idAcheteur): self
    {
        $this->idAcheteur = $idAcheteur;

        return $this;
    }

    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    public function setDateFacture($dateFacture): self
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    public function getMontantTotal()
    {
        return $this->montantTotal;
    }

    public function setMontantTotal($montantTotal): self
    {
        $this->montantTotal = $montantTotal;

        return $this;
    }

    public function getStatutFacture()
    {
        return $this->statutFacture;
    }

    public function setStatutFacture($statutFacture): self
    {
        $this->statutFacture = $statutFacture;

        return $this;
    }

    public function getDateLimitePaiement()
    {
        return $this->dateLimitePaiement;
    }

    public function setDateLimitePaiement($dateLimitePaiement): self
    {
        $this->dateLimitePaiement = $dateLimitePaiement;

        return $this;
    }
}