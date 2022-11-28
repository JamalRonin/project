<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=125)
     */
    private $denomination;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=125)
     */
    private $slug;

    /**
     * @ORM\OneToMany(targetEntity=TitleService::class, mappedBy="service", orphanRemoval=true)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity=AboutService::class, mappedBy="service")
     */
    private $about;

    public function __construct()
    {
        $this->title = new ArrayCollection();
        $this->about = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    public function setDenomination(string $denomination): self
    {
        $this->denomination = $denomination;

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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection<int, TitleService>
     */
    public function getTitle(): Collection
    {
        return $this->title;
    }

    public function addTitle(TitleService $title): self
    {
        if (!$this->title->contains($title)) {
            $this->title[] = $title;
            $title->setService($this);
        }

        return $this;
    }

    public function removeTitle(TitleService $title): self
    {
        if ($this->title->removeElement($title)) {
            // set the owning side to null (unless already changed)
            if ($title->getService() === $this) {
                $title->setService(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AboutService>
     */
    public function getAbout(): Collection
    {
        return $this->about;
    }

    public function addAbout(AboutService $about): self
    {
        if (!$this->about->contains($about)) {
            $this->about[] = $about;
            $about->setService($this);
        }

        return $this;
    }

    public function removeAbout(AboutService $about): self
    {
        if ($this->about->removeElement($about)) {
            // set the owning side to null (unless already changed)
            if ($about->getService() === $this) {
                $about->setService(null);
            }
        }

        return $this;
    }
}
