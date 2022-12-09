<?php

namespace App\Entity;

use App\Repository\AboutServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AboutServiceRepository::class)
 */
class AboutService
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $icone;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $subText;

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
     * @ORM\Column(type="string", length=50)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $alt;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class, inversedBy="about")
     */
    private $service;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIcone(): ?string
    {
        return $this->icone;
    }

    public function setIcone(?string $icone): self
    {
        $this->icone = $icone;

        return $this;
    }

    public function getSubText(): ?string
    {
        return $this->subText;
    }

    public function setSubText(string $subText): self
    {
        $this->subText = $subText;

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

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }
}
