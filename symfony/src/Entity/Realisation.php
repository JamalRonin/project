<?php

namespace App\Entity;

use App\Repository\RealisationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RealisationRepository::class)
 */
class Realisation
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
    private $img;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $information;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $alt;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=SliderRealisation::class, mappedBy="realisation")
     */
    private $slider;

    /**
     * @ORM\OneToMany(targetEntity=RealisationDetail::class, mappedBy="realisation")
     */
    private $detail;

    /**
     * @ORM\OneToMany(targetEntity=ChecklistRealisation::class, mappedBy="realisation")
     */
    private $checklist;

    /**
     * @ORM\OneToMany(targetEntity=CleaningGuide::class, mappedBy="realisation")
     */
    private $cleaning_guide;

    public function __construct()
    {
        $this->slider = new ArrayCollection();
        $this->detail = new ArrayCollection();
        $this->checklist = new ArrayCollection();
        $this->cleaning_guide = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getInformation(): ?string
    {
        return $this->information;
    }

    public function setInformation(string $information): self
    {
        $this->information = $information;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;

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

    /**
     * @return Collection<int, SliderRealisation>
     */
    public function getSlider(): Collection
    {
        return $this->slider;
    }

    public function addSlider(SliderRealisation $slider): self
    {
        if (!$this->slider->contains($slider)) {
            $this->slider[] = $slider;
            $slider->setRealisation($this);
        }

        return $this;
    }

    public function removeSlider(SliderRealisation $slider): self
    {
        if ($this->slider->removeElement($slider)) {
            // set the owning side to null (unless already changed)
            if ($slider->getRealisation() === $this) {
                $slider->setRealisation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, RealisationDetail>
     */
    public function getDetail(): Collection
    {
        return $this->detail;
    }

    public function addDetail(RealisationDetail $detail): self
    {
        if (!$this->detail->contains($detail)) {
            $this->detail[] = $detail;
            $detail->setRealisation($this);
        }

        return $this;
    }

    public function removeDetail(RealisationDetail $detail): self
    {
        if ($this->detail->removeElement($detail)) {
            // set the owning side to null (unless already changed)
            if ($detail->getRealisation() === $this) {
                $detail->setRealisation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ChecklistRealisation>
     */
    public function getChecklist(): Collection
    {
        return $this->checklist;
    }

    public function addChecklist(ChecklistRealisation $checklist): self
    {
        if (!$this->checklist->contains($checklist)) {
            $this->checklist[] = $checklist;
            $checklist->setRealisation($this);
        }

        return $this;
    }

    public function removeChecklist(ChecklistRealisation $checklist): self
    {
        if ($this->checklist->removeElement($checklist)) {
            // set the owning side to null (unless already changed)
            if ($checklist->getRealisation() === $this) {
                $checklist->setRealisation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CleaningGuide>
     */
    public function getCleaningGuide(): Collection
    {
        return $this->cleaning_guide;
    }

    public function addCleaningGuide(CleaningGuide $cleaningGuide): self
    {
        if (!$this->cleaning_guide->contains($cleaningGuide)) {
            $this->cleaning_guide[] = $cleaningGuide;
            $cleaningGuide->setRealisation($this);
        }

        return $this;
    }

    public function removeCleaningGuide(CleaningGuide $cleaningGuide): self
    {
        if ($this->cleaning_guide->removeElement($cleaningGuide)) {
            // set the owning side to null (unless already changed)
            if ($cleaningGuide->getRealisation() === $this) {
                $cleaningGuide->setRealisation(null);
            }
        }

        return $this;
    }
}
