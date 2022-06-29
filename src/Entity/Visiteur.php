<?php

namespace App\Entity;

use App\Repository\VisiteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VisiteurRepository::class)
 */
class Visiteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomVisiteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomVisiteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pieceVisiteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adreeseVisiteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    /**
     * @ORM\Column(type="date")
     */
    private $datenais;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomVisiteur(): ?string
    {
        return $this->nomVisiteur;
    }

    public function setNomVisiteur(string $nomVisiteur): self
    {
        $this->nomVisiteur = $nomVisiteur;

        return $this;
    }

    public function getPrenomVisiteur(): ?string
    {
        return $this->prenomVisiteur;
    }

    public function setPrenomVisiteur(string $prenomVisiteur): self
    {
        $this->prenomVisiteur = $prenomVisiteur;

        return $this;
    }

    public function getPieceVisiteur(): ?string
    {
        return $this->pieceVisiteur;
    }

    public function setPieceVisiteur(string $pieceVisiteur): self
    {
        $this->pieceVisiteur = $pieceVisiteur;

        return $this;
    }

    public function getAdreeseVisiteur(): ?string
    {
        return $this->adreeseVisiteur;
    }

    public function setAdreeseVisiteur(string $adreeseVisiteur): self
    {
        $this->adreeseVisiteur = $adreeseVisiteur;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getDatenais(): ?\DateTimeInterface
    {
        return $this->datenais;
    }

    public function setDatenais(\DateTimeInterface $datenais): self
    {
        $this->datenais = $datenais;

        return $this;
    }
}
