<?php

namespace App\Entity;

use App\Repository\ArticleH3Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleH3Repository::class)
 */
class ArticleH3
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
    private $h3;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="h3")
     */
    private $article;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getH3(): ?string
    {
        return $this->h3;
    }

    public function setH3(string $h3): self
    {
        $this->h3 = $h3;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }
}
