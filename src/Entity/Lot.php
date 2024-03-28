<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LotRepository;

#[ORM\Entity(repositoryClass: LotRepository::class)]
#[ORM\Table(name:"lot")]
class Lot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private $id;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true, name:"dateEnchere")]
    private ?\DateTimeInterface $dateEnchere = null;
    
    #[ORM\Column(type: Types::INTEGER, name: "idBateau")]
    private $idBateau;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, name: "datePeche")]
    private ?\DateTimeInterface $datePeche;

    #[ORM\Column(type: Types::INTEGER, name: "idLot")]
    private $idLot;

    #[ORM\Column(type: Types::INTEGER, name: "idEspece")]
    private $idEspece;

    #[ORM\Column(type: Types::INTEGER, name: "idTaille")]
    private $idTaille;

    #[ORM\Column(type: Types::STRING, length: 3, name: "idPresentation")]
    private $idPresentation;

    #[ORM\Column(type: Types::STRING, length: 1, name: "idQualite")]
    private $idQualite;

    #[ORM\Column(type: Types::FLOAT, name: "poidsBrutLot")]
    private $poidsBrutLot;

    #[ORM\Column(type: Types::FLOAT, name: "prixEnchere")]
    private $prixEnchere;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, name: "HeureDebutEnchere")]
    private $HeureDebutEnchere;

    #[ORM\Column(type: Types::FLOAT, name: "prixPlancher")]
    private $prixPlancher;

    #[ORM\Column(type: Types::FLOAT, name: "prixDepart")]
    private $prixDepart;

    #[ORM\Column(type: Types::STRING, length: 1, name: "codeEtat")]
    private $codeEtat;

    // Ajout des getters et setters 
    
    public function getIdBateau()
    {
        return $this->idBateau;
    }

    public function setIdBateau($idBateau): self
    {
        $this->idBateau = $idBateau;

        return $this;
    }

    public function getIdLot()
    {
        return $this->idLot;
    }

    public function setIdLot($idLot): self
    {
        $this->idLot = $idLot;

        return $this;
    }

    public function getIdEspece()
    {
        return $this->idEspece;
    }

    public function setIdEspece($idEspece): self
    {
        $this->idEspece = $idEspece;

        return $this;
    }

    public function getIdTaille()
    {
        return $this->idTaille;
    }

    public function setIdTaille($idTaille): self
    {
        $this->idTaille = $idTaille;

        return $this;
    }

    public function getIdPresentation()
    {
        return $this->idPresentation;
    }

    public function setIdPresentation($idPresentation): self
    {
        $this->idPresentation = $idPresentation;

        return $this;
    }

    public function getIdQualite()
    {
        return $this->idQualite;
    }

    public function setIdQualite($idQualite): self
    {
        $this->idQualite = $idQualite;

        return $this;
    }

    public function getPoidsBrutLot()
    {
        return $this->poidsBrutLot;
    }

    public function setPoidsBrutLot($poidsBrutLot): self
    {
        $this->poidsBrutLot = $poidsBrutLot;

        return $this;
    }

    public function getPrixEnchere()
    {
        return $this->prixEnchere;
    }

    public function setPrixEnchere($prixEnchere): self
    {
        $this->prixEnchere = $prixEnchere;

        return $this;
    }

    public function getDatePeche(): ?\DateTimeInterface
    {
        return $this->datePeche;
    }

    public function setDatePeche(?\DateTimeInterface $datePeche): self
    {
        $this->datePeche = $datePeche;

        return $this;
    }

    public function getHeureDebutEnchere(): ?\DateTimeInterface
    {
        return $this->HeureDebutEnchere;
    }

    public function setHeureDebutEnchere(?\DateTimeInterface $HeureDebutEnchere): self
    {
        $this->HeureDebutEnchere = $HeureDebutEnchere;

        return $this;
    }

    public function getPrixPlancher(): ?float
    {
        return $this->prixPlancher;
    }

    public function setPrixPlancher(?float $prixPlancher): self
    {
        $this->prixPlancher = $prixPlancher;

        return $this;
    }

    public function getPrixDepart(): ?float
    {
        return $this->prixDepart;
    }

    public function setPrixDepart(?float $prixDepart): self
    {
        $this->prixDepart = $prixDepart;

        return $this;
    }

    public function getCodeEtat(): string
    {
        return $this->codeEtat;
    }

    public function setCodeEtat(string $codeEtat): self
    {
        $this->codeEtat = $codeEtat;

        return $this;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function getDateEnchere(): ?\DateTimeInterface
    {
        return $this->dateEnchere;
    }

    public function setDateEnchere(?\DateTimeInterface $dateEnchere): static
    {
        $this->dateEnchere = $dateEnchere;

        return $this;
    }
}