<?php

namespace App\Entity;

use App\Repository\InfoPratiqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoPratiqueRepository::class)]
class InfoPratique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeInfo = null;

    #[ORM\Column(length: 255)]
    private ?string $valeur = null;

    #[ORM\Column]
    private ?int $ordre = null;

    #[ORM\ManyToOne(inversedBy: 'infoPratiques')]
    private ?Therapeute $therapeute = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeInfo(): ?string
    {
        return $this->typeInfo;
    }

    public function setTypeInfo(string $typeInfo): static
    {
        $this->typeInfo = $typeInfo;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): static
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(int $ordre): static
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getTherapeute(): ?Therapeute
    {
        return $this->therapeute;
    }

    public function setTherapeute(?Therapeute $therapeute): static
    {
        $this->therapeute = $therapeute;

        return $this;
    }
}
