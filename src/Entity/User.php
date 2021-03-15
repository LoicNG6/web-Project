<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name=" user")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({
 *       "user" = "User",
"journalist" = "Journalist",
 *       "admin" = "Admin"
 *     })
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fistName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastName;

    /**
     * @ORM\Column(type="date")
     */
    private $birthday;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $town;

    /**
     * @ORM\Column(type="integer")
     */
    private $street;

    /**
     * @ORM\Column(type="integer")
     */
    private $numStreet;

    /**
     * @ORM\Column(type="integer")
     */
    private $zipCode;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $phoneNum;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $userName;


    /**
     * @ORM\OneToMany(targetEntity=Evenent::class, mappedBy="User")
     */
    private $evenents;

    /**
     * @ORM\OneToMany(targetEntity=Admin::class, mappedBy="User")
     */
    private $y;

    /**
     * @ORM\OneToMany(targetEntity=Message::class, mappedBy="user")
     */
    private $messages;


    public function __construct()
    {

        $this->evenents = new ArrayCollection();
        $this->y = new ArrayCollection();
        $this->messages = new ArrayCollection();

    }


    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string)$this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string)$this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFistName(): ?string
    {
        return $this->fistName;
    }

    public function setFistName(string $fistName): self
    {
        $this->fistName = $fistName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(string $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getStreet(): ?int
    {
        return $this->street;
    }

    public function setStreet(int $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getNumStreet(): ?int
    {
        return $this->numStreet;
    }

    public function setNumStreet(int $numStreet): self
    {
        $this->numStreet = $numStreet;

        return $this;
    }

    public function getZipCode(): ?int
    {
        return $this->zipCode;
    }

    public function setZipCode(int $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getPhoneNum(): ?string
    {
        return $this->phoneNum;
    }

    public function setPhoneNum(string $phoneNum): self
    {
        $this->phoneNum = $phoneNum;

        return $this;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * @return Collection|Evenent[]
     */
    public function getEvenents(): Collection
    {
        return $this->evenents;
    }

    public function addEvenent(Evenent $evenent): self
    {
        if (!$this->evenents->contains($evenent)) {
            $this->evenents[] = $evenent;
            $evenent->setUser($this);
        }

        return $this;
    }

    public function removeEvenent(Evenent $evenent): self
    {
        if ($this->evenents->removeElement($evenent)) {
            // set the owning side to null (unless already changed)
            if ($evenent->getUser() === $this) {
                $evenent->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Admin[]
     */
    public function getY(): Collection
    {
        return $this->y;
    }

    public function addY(Admin $y): self
    {
        if (!$this->y->contains($y)) {
            $this->y[] = $y;
            $y->setUser($this);
        }

        return $this;
    }

    public function removeY(Admin $y): self
    {
        if ($this->y->removeElement($y)) {
            // set the owning side to null (unless already changed)
            if ($y->getUser() === $this) {
                $y->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Message[]
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setUser($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getUser() === $this) {
                $message->setUser(null);
            }
        }

        return $this;
    }

}