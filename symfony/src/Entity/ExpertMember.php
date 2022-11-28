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
}
