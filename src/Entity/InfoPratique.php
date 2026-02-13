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
    private ?string $lieu = null;

    #[ORM\Column(length: 100)]
    private ?string $duree = null;

    #[ORM\Column(type: 'decimal', precision: 6, scale: 2)]
    private ?float $tarif = null;

    #[ORM\Column(length: 100)]
    private ?string $rythme = null;

    #[ORM\Column(length: 255)]
    private ?string $modalitesPaiement = null;

    #[ORM\ManyToOne(inversedBy: 'infoPratiques')]
    private ?Therapeute $therapeute = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getRythme(): ?string
    {
        return $this->rythme;
    }

    public function setRythme(string $rythme): self
    {
        $this->rythme = $rythme;

        return $this;
    }

    public function getModalitesPaiement(): ?string
    {
        return $this->modalitesPaiement;
    }

    public function setModalitesPaiement(string $modalitesPaiement): self
    {
        $this->modalitesPaiement = $modalitesPaiement;

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
