<?php

namespace App\Controller;

use App\Entity\ArticleTags;
use App\Repository\ArticleCategoriesRepository;
use App\Repository\ArticleImagesRepository;
use App\Repository\ArticleLiRepository;
use App\Repository\ArticleRepository;
use App\Repository\ArticleTagsRepository;
use App\Repository\ArticleTextRepository;
use App\Repository\RealisationDetailRepository;
use App\Repository\RealisationRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    public function index(
        RealisationRepository $realisationRepository,  
        ServiceRepository $serviceRepository,
        ArticleRepository $articleRepository,
        ArticleLiRepository $articleLiRepository,
        ArticleTagsRepository $articleTagsRepository, 
        ArticleTextRepository $articleTextRepository,
        ArticleImagesRepository $articleImagesRepository,
        ArticleCategoriesRepository $articleCategoriesRepository): Response
    {
        return $this->render('blog/index.html.twig', [
            'realisations' => $realisationRepository->findAll(),
            'services' => $serviceRepository->findAll(),
            'articles' => $articleRepository->findAll(),
            'articleTags' => $articleTagsRepository->findAll(),
            'articleTexts' => $articleTextRepository->findAll(),
            'articleImages' => $articleImagesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="app_blog_show")
     */
    public function show(
        RealisationRepository $realisationRepository,  
        ServiceRepository $serviceRepository,
        ArticleRepository $articleRepository, $slug): Response
    {
        $article = $articleRepository->findOneBy(['slug' => $slug]);
        $articleTags = $article->getArticleTags()->getValues();
        $articleTexts = $article->getArticleTexts()->getValues();
        $articleImages = $article->getImg()->getValues();
        $articleLi = $article->getLi()->getValues();
        $articleCategories = $article->getCategory();
        return $this->render('blog/article/show.html.twig', [
            'realisations' => $realisationRepository->findAll(),
            'services' => $serviceRepository->findAll(),
            'slug' => $slug,
            'article' => $article,
            'articleTags' => $articleTags,
            'articleTexts' => $articleTexts,
            'articleImages' => $articleImages,
            'articleLi' => $articleLi,
            'articleCategories' => $articleCategories,
            

        ]);
    }
}
