<?php

namespace App\Entity;

use App\Repository\CleaningGuideRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CleaningGuideRepository::class)
 */
class CleaningGuide
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
    private $li1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $li2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $li3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $li4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $li5;

    /**
     * @ORM\Column(type="text")
     */
    private $information;

    /**
     * @ORM\ManyToOne(targetEntity=Realisation::class, inversedBy="cleaning_guide")
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

    public function getLi1(): ?string
    {
        return $this->li1;
    }

    public function setLi1(string $li1): self
    {
        $this->li1 = $li1;

        return $this;
    }

    public function getLi2(): ?string
    {
        return $this->li2;
    }

    public function setLi2(string $li2): self
    {
        $this->li2 = $li2;

        return $this;
    }

    public function getLi3(): ?string
    {
        return $this->li3;
    }

    public function setLi3(string $li3): self
    {
        $this->li3 = $li3;

        return $this;
    }

    public function getLi4(): ?string
    {
        return $this->li4;
    }

    public function setLi4(string $li4): self
    {
        $this->li4 = $li4;

        return $this;
    }

    public function getLi5(): ?string
    {
        return $this->li5;
    }

    public function setLi5(string $li5): self
    {
        $this->li5 = $li5;

        return $this;
    }

    public function getInformation(): ?string
    {
        return $this->information;
    }

    public function setInformation(string $information): self
    {
        $this->information = $information;

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
