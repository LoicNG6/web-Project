<?php

namespace App\Entity;
use App\Entity\User;
use App\Repository\JournalistRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JournalistRepository::class)
 */
class Journalist extends User
{

    /**
     * @ORM\Column(type="boolean")
     */
    private $Independant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $redacteurChef;

    public function getIndependant(): ?bool
    {
        return $this->Independant;
    }

    public function setIndependant(bool $Independant): self
    {
        $this->Independant = $Independant;

        return $this;
    }

    public function getRedacteurChef(): ?bool
    {
        return $this->redacteurChef;
    }


}
