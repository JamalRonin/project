<?php

namespace App\Entity;

use App\Repository\ArticleLiRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleLiRepository::class)
 */
class ArticleLi
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
    private $li;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLi(): ?string
    {
        return $this->li;
    }

    public function setLi(string $li): self
    {
        $this->li = $li;

        return $this;
    }
}
