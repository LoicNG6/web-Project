<?php

namespace App\Entity;

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

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="journalist_id")
     */
    private $articles;

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

    public function getArticles(): ?Article
    {
        return $this->articles;
    }
    public function setArticles(?Article $articles): self
    {
        $this->articles = $articles;
        return $this;
    }
}
