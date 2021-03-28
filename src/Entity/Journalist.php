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

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="journalist", orphanRemoval=true)
     */
    private $articles;

    public function __construct()
    {
        parent::__construct();
        $this->articles = new ArrayCollection();
    }

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

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setJournalist($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getJournalist() === $this) {
                $article->setJournalist(null);
            }
        }

        return $this;
    }


}
