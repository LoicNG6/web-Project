<?php

namespace App\Entity;

use App\Repository\EvenentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenentRepository::class)
 */
class Evenent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $spaceAvailable;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="evenents")
     */
    private $User;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="Participant")
     */
    private $Participant;

    public function __construct()
    {
        $this->Participant = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getSpaceAvailable(): ?string
    {
        return $this->spaceAvailable;
    }

    public function setSpaceAvailable(string $spaceAvailable): self
    {
        $this->spaceAvailable = $spaceAvailable;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getParticipant(): Collection
    {
        return $this->Participant;
    }

    public function addParticipant(User $participant): self
    {
        if (!$this->Participant->contains($participant)) {
            $this->Participant[] = $participant;
        }

        return $this;
    }

    public function removeParticipant(User $participant): self
    {
        $this->Participant->removeElement($participant);

        return $this;
    }

}
