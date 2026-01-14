<?php

namespace App\Entity;

use App\Repository\TherapeuteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TherapeuteRepository::class)]
class Therapeute
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $presentation = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $approche = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $cadreProfessionnel = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    /**
     * @var Collection<int, Page>
     */
    #[ORM\OneToMany(targetEntity: Page::class, mappedBy: 'therapeute')]
    private Collection $pages;

    /**
     * @var Collection<int, MotifConsultation>
     */
    #[ORM\OneToMany(targetEntity: MotifConsultation::class, mappedBy: 'therapeute')]
    private Collection $motifConsultations;

    /**
     * @var Collection<int, InfoPratique>
     */
    #[ORM\OneToMany(targetEntity: InfoPratique::class, mappedBy: 'therapeute')]
    private Collection $infoPratiques;

    /**
     * @var Collection<int, MessageContact>
     */
    #[ORM\OneToMany(targetEntity: MessageContact::class, mappedBy: 'therapeute')]
    private Collection $messageContacts;

    public function __construct()
    {
        $this->pages = new ArrayCollection();
        $this->motifConsultations = new ArrayCollection();
        $this->infoPratiques = new ArrayCollection();
        $this->messageContacts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): static
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getApproche(): ?string
    {
        return $this->approche;
    }

    public function setApproche(string $approche): static
    {
        $this->approche = $approche;

        return $this;
    }

    public function getCadreProfessionnel(): ?string
    {
        return $this->cadreProfessionnel;
    }

    public function setCadreProfessionnel(string $cadreProfessionnel): static
    {
        $this->cadreProfessionnel = $cadreProfessionnel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return Collection<int, Page>
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }

    public function addPage(Page $page): static
    {
        if (!$this->pages->contains($page)) {
            $this->pages->add($page);
            $page->setTherapeute($this);
        }

        return $this;
    }

    public function removePage(Page $page): static
    {
        if ($this->pages->removeElement($page)) {
            // set the owning side to null (unless already changed)
            if ($page->getTherapeute() === $this) {
                $page->setTherapeute(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, MotifConsultation>
     */
    public function getMotifConsultations(): Collection
    {
        return $this->motifConsultations;
    }

    public function addMotifConsultation(MotifConsultation $motifConsultation): static
    {
        if (!$this->motifConsultations->contains($motifConsultation)) {
            $this->motifConsultations->add($motifConsultation);
            $motifConsultation->setTherapeute($this);
        }

        return $this;
    }

    public function removeMotifConsultation(MotifConsultation $motifConsultation): static
    {
        if ($this->motifConsultations->removeElement($motifConsultation)) {
            // set the owning side to null (unless already changed)
            if ($motifConsultation->getTherapeute() === $this) {
                $motifConsultation->setTherapeute(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, InfoPratique>
     */
    public function getInfoPratiques(): Collection
    {
        return $this->infoPratiques;
    }

    public function addInfoPratique(InfoPratique $infoPratique): static
    {
        if (!$this->infoPratiques->contains($infoPratique)) {
            $this->infoPratiques->add($infoPratique);
            $infoPratique->setTherapeute($this);
        }

        return $this;
    }

    public function removeInfoPratique(InfoPratique $infoPratique): static
    {
        if ($this->infoPratiques->removeElement($infoPratique)) {
            // set the owning side to null (unless already changed)
            if ($infoPratique->getTherapeute() === $this) {
                $infoPratique->setTherapeute(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, MessageContact>
     */
    public function getMessageContacts(): Collection
    {
        return $this->messageContacts;
    }

    public function addMessageContact(MessageContact $messageContact): static
    {
        if (!$this->messageContacts->contains($messageContact)) {
            $this->messageContacts->add($messageContact);
            $messageContact->setTherapeute($this);
        }

        return $this;
    }

    public function removeMessageContact(MessageContact $messageContact): static
    {
        if ($this->messageContacts->removeElement($messageContact)) {
            // set the owning side to null (unless already changed)
            if ($messageContact->getTherapeute() === $this) {
                $messageContact->setTherapeute(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }
}
