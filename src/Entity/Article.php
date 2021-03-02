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
     * @ORM\OneToMany(targetEntity="App\Entity\Pictures", mappedBy="Article", orphanRemoval=true, cascade={"persist"})
     */
    private $picture ;

    public function __construct()
    {
        $this->picture = new ArrayCollection();
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
        return $this->picture ;
    }

    public function addPicture(Pictures $picture): self
    {
        if (!$this->picture ->contains($picture)) {
            $this->picture [] = $picture;
            $picture->setArticle($this);
        }

        return $this;
    }

    public function removePicture(Pictures $picture): self
    {
        if ($this->picture->removeElement($picture)) {
            // set the owning side to null (unless already changed)
            if ($picture->getArticle() === $this) {
                $picture->setArticle(null);
            }
        }

        return $this;
    }
    /**
     * @return Collection|Pictures[]
     */
    public function getPicture (): Collection
    {
        return $this->picture;
    }

    public function addPictures(Pictures $picture): self
    {
        if (!$this->picture ->contains($picture)) {
            $this->picture [] = $picture;
            $picture->setArticle($this);
        }

        return $this;
    }

    public function removePictures(Pictures $image): self
    {
        if ($this->picture->contains($image)) {
            $this->picture->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getArticle() === $this) {
                $image->setArticle(null);
            }
        }

        return $this;
    }


}