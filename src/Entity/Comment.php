<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="comment")
     */
    private $articleId;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\ManyToOne(targetEntity=article::class, inversedBy="comments")
     */
    private $articlId;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comments")
     */
    private $userId;

    public function __construct()
    {
        $this->articleId = new ArrayCollection();
        $this->userId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticleId(): Collection
    {
        return $this->articleId;
    }

    public function addArticleId(Article $articleId): self
    {
        if (!$this->articleId->contains($articleId)) {
            $this->articleId[] = $articleId;
            $articleId->setComment($this);
        }

        return $this;
    }

    public function removeArticleId(Article $articleId): self
    {
        if ($this->articleId->removeElement($articleId)) {
            // set the owning side to null (unless already changed)
            if ($articleId->getComment() === $this) {
                $articleId->setComment(null);
            }
        }

        return $this;
    }




    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getArticlId(): ?article
    {
        return $this->articlId;
    }

    public function setArticlId(?article $articlId): self
    {
        $this->articlId = $articlId;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->UserId;
    }

    public function setRelation(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
