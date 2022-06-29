<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgentRepository::class)
 */
class Agent
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
    private $nomagent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomagent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseagent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telagent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pieceagent;

    /**
     * @ORM\Column(type="date")
     */
    private $datenais;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomagent(): ?string
    {
        return $this->nomagent;
    }

    public function setNomagent(string $nomagent): self
    {
        $this->nomagent = $nomagent;

        return $this;
    }

    public function getPrenomagent(): ?string
    {
        return $this->prenomagent;
    }

    public function setPrenomagent(string $prenomagent): self
    {
        $this->prenomagent = $prenomagent;

        return $this;
    }

    public function getAdresseagent(): ?string
    {
        return $this->adresseagent;
    }

    public function setAdresseagent(string $adresseagent): self
    {
        $this->adresseagent = $adresseagent;

        return $this;
    }

    public function getTelagent(): ?string
    {
        return $this->telagent;
    }

    public function setTelagent(string $telagent): self
    {
        $this->telagent = $telagent;

        return $this;
    }

    public function getPieceagent(): ?string
    {
        return $this->pieceagent;
    }

    public function setPieceagent(string $pieceagent): self
    {
        $this->pieceagent = $pieceagent;

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
