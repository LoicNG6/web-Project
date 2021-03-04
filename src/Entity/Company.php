<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompanyRepository::class)
 */
class Company
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
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Contry;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailCompany;

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

    public function getContry(): ?string
    {
        return $this->Contry;
    }

    public function setContry(?string $Contry): self
    {
        $this->Contry = $Contry;

        return $this;
    }

    public function getEmailCompany(): ?string
    {
        return $this->emailCompany;
    }

    public function setEmailCompany(string $emailCompany): self
    {
        $this->emailCompany = $emailCompany;

        return $this;
    }
}
