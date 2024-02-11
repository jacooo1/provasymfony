<?php

namespace App\Entity;

use App\Repository\PlayersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayersRepository::class)]
class Players
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nome = null;

    #[ORM\Column(nullable: true)]
    private ?int $eta = null;

    #[ORM\Column(nullable: true)]
    private ?int $velocita = null;

    #[ORM\Column(nullable: true)]
    private ?int $punteggio = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEta(): ?int
    {
        return $this->eta;
    }

    public function setEta(?int $eta): static
    {
        $this->eta = $eta;

        return $this;
    }

    public function getVelocita(): ?int
    {
        return $this->velocita;
    }

    public function setVelocita(?int $velocita): static
    {
        $this->velocita = $velocita;

        return $this;
    }

    public function getPunteggio(): ?int
    {
        return $this->punteggio;
    }

    public function setPunteggio(?int $punteggio): static
    {
        $this->punteggio = $punteggio;

        return $this;
    }
}
