<?php

namespace App\Entity;

use App\Repository\RealisationDetailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RealisationDetailRepository::class)
 */
class RealisationDetail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skills;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $finDeRealisation;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $manager;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\ManyToOne(targetEntity=Realisation::class, inversedBy="detail")
     */
    private $realisation;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(string $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getFinDeRealisation(): ?string
    {
        return $this->finDeRealisation;
    }

    public function setFinDeRealisation(string $finDeRealisation): self
    {
        $this->finDeRealisation = $finDeRealisation;

        return $this;
    }

    public function getManager(): ?string
    {
        return $this->manager;
    }

    public function setManager(string $manager): self
    {
        $this->manager = $manager;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getRealisation(): ?Realisation
    {
        return $this->realisation;
    }

    public function setRealisation(?Realisation $realisation): self
    {
        $this->realisation = $realisation;

        return $this;
    }
}
