<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=ArticleCategories::class, inversedBy="articles")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=ArticleImages::class, mappedBy="article")
     */
    private $img;

    /**
     * @ORM\OneToMany(targetEntity=ArticleText::class, mappedBy="article")
     */
    private $articleTexts;

    /**
     * @ORM\ManyToMany(targetEntity=ArticleTags::class, mappedBy="articles")
     */
    private $articleTags;

    public function __construct()
    {
        $this->img = new ArrayCollection();
        $this->articleTexts = new ArrayCollection();
        $this->articleTags = new ArrayCollection();
    }

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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCategory(): ?ArticleCategories
    {
        return $this->category;
    }

    public function setCategory(?ArticleCategories $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection<int, ArticleImages>
     */
    public function getImg(): Collection
    {
        return $this->img;
    }

    public function addImg(ArticleImages $img): self
    {
        if (!$this->img->contains($img)) {
            $this->img[] = $img;
            $img->setArticle($this);
        }

        return $this;
    }

    public function removeImg(ArticleImages $img): self
    {
        if ($this->img->removeElement($img)) {
            // set the owning side to null (unless already changed)
            if ($img->getArticle() === $this) {
                $img->setArticle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ArticleText>
     */
    public function getArticleTexts(): Collection
    {
        return $this->articleTexts;
    }

    public function addArticleText(ArticleText $articleText): self
    {
        if (!$this->articleTexts->contains($articleText)) {
            $this->articleTexts[] = $articleText;
            $articleText->setArticle($this);
        }

        return $this;
    }

    public function removeArticleText(ArticleText $articleText): self
    {
        if ($this->articleTexts->removeElement($articleText)) {
            // set the owning side to null (unless already changed)
            if ($articleText->getArticle() === $this) {
                $articleText->setArticle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ArticleTags>
     */
    public function getArticleTags(): Collection
    {
        return $this->articleTags;
    }

    public function addArticleTag(ArticleTags $articleTag): self
    {
        if (!$this->articleTags->contains($articleTag)) {
            $this->articleTags[] = $articleTag;
            $articleTag->addArticle($this);
        }

        return $this;
    }

    public function removeArticleTag(ArticleTags $articleTag): self
    {
        if ($this->articleTags->removeElement($articleTag)) {
            $articleTag->removeArticle($this);
        }

        return $this;
    }
}
