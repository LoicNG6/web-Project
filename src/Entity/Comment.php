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

    /**
     * @ORM\Column(type="boolean")
     */
    private $active = false;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nickname;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="boolean")
     */
    private $rgpd;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comment")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Comment::class, inversedBy="replies")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="parent")
     */
    private $replies;

    public function __construct()
    {
        $this->articleId = new ArrayCollection();
        $this->userId = new ArrayCollection();
        $this->replies = new ArrayCollection();
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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getRgpd(): ?bool
    {
        return $this->rgpd;
    }

    public function setRgpd(bool $rgpd): self
    {
        $this->rgpd = $rgpd;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getReplies(): Collection
    {
        return $this->replies;
    }

    public function addReply(self $reply): self
    {
        if (!$this->replies->contains($reply)) {
            $this->replies[] = $reply;
            $reply->setParent($this);
        }

        return $this;
    }

    public function removeReply(self $reply): self
    {
        if ($this->replies->removeElement($reply)) {
            // set the owning side to null (unless already changed)
            if ($reply->getParent() === $this) {
                $reply->setParent(null);
            }
        }

        return $this;
    }
}
