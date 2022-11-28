<?php

namespace App\Entity;

use App\Repository\ExpertMemberRepository;
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
        return $this->biography1;
    }

    public function setBiographie1(string $biography1): self
    {
        $this->biography1 = $biography1;

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
}
