<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Journalist::class, inversedBy="articles")
     */
    private $journalist_id;

    /**
     * @ORM\Column(type="date")
     */
    private $publication_date;

    /**
     * @ORM\ManyToOne(targetEntity=Genre::class, inversedBy="articles")
     */
    private $genre_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="boolean")
     */
    private $emergency;

    /**
     * @ORM\OneToMany(targetEntity=Pictures::class, mappedBy="article", orphanRemoval=true, cascade={"persist"})
     */
    private $pictures;

    public function __construct()
    {
        $this->pictures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJournalistId(): ?Journalist
    {
        return $this->journalist_id;
    }

    public function setJournalistId(?Journalist $journalist_id): self
    {
        $this->journalist_id = $journalist_id;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publication_date;
    }

    public function setPublicationDate(\DateTimeInterface $publication_date): self
    {
        $this->publication_date = $publication_date;
        return $this;
    }

    public function getGenreId(): ?Genre
    {
        return $this->genre_id;
    }

    public function setGenreId(?Genre $genre_id): self
    {
        $this->genre_id = $genre_id;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getEmergency(): ?bool
    {
        return $this->emergency;
    }

    public function setEmergency(bool $emergency): self
    {
        $this->emergency = $emergency;
        return $this;
    }

    /**
     * @return Collection|Pictures[]
     */
    public function getPictures(): Collection
    {
        return $this->pictures;
    }

    public function addPicture  (Pictures $picture): self
    {
        if (!$this->pictures->contains($picture)) {
            $this->pictures[] = $picture;
            $picture->setArticle($this);
        }
        return $this;
    }

    public function removePicture(Pictures $picture): self
    {
        if ($this->pictures->removeElement($picture)) {
            // set the owning side to null (unless already changed)
            if ($picture->getArticle() === $this) {
                $picture->setArticle(null);
            }
        }

        return $this;
    }

    public function setPicture(string $string)
    {
    }

}
