<?php

namespace App\Entity;

use App\Repository\ExpertMemberRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExpertMemberRepository::class)
 */
class ExpertMember
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $alt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fullname;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $teamTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="text")
     */
    private $shortDesc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $telephone;

    /**
     * @ORM\Column(type="text")
     */
    private $biographie1;

    /**
     * @ORM\Column(type="text")
     */
    private $biographie2;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $designationInfo;

    /**
     * @ORM\OneToMany(targetEntity=Skill::class, mappedBy="expertMember")
     */
    private $skills;

    public function __construct()
    {
        $this->skills = new ArrayCollection();
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

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getTeamTitle(): ?string
    {
        return $this->teamTitle;
    }

    public function setTeamTitle(string $teamTitle): self
    {
        $this->teamTitle = $teamTitle;

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

    public function getShortDesc(): ?string
    {
        return $this->shortDesc;
    }

    public function setShortDesc(string $shortDesc): self
    {
        $this->shortDesc = $shortDesc;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getBiographie1(): ?string
    {
        return $this->biographie1;
    }

    public function setBiographie1(string $biographie1): self
    {
        $this->biographie1 = $biographie1;

        return $this;
    }

    public function getBiographie2(): ?string
    {
        return $this->biographie2;
    }

    public function setBiographie2(string $biographie2): self
    {
        $this->biographie2 = $biographie2;

        return $this;
    }

    public function getDesignationInfo(): ?string
    {
        return $this->designationInfo;
    }

    public function setDesignationInfo(string $designationInfo): self
    {
        $this->designationInfo = $designationInfo;

        return $this;
    }

    /**
     * @return Collection<int, Skill>
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills[] = $skill;
            $skill->setExpertMember($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skills->removeElement($skill)) {
            // set the owning side to null (unless already changed)
            if ($skill->getExpertMember() === $this) {
                $skill->setExpertMember(null);
            }
        }

        return $this;
    }
}
