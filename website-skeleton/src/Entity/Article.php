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

   }
