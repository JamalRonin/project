<?php

namespace App\Controller;

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
    public function index(RealisationRepository $realisationRepository,  ServiceRepository $serviceRepository): Response
    {
        return $this->render('blog/index.html.twig', [
            'realisations' => $realisationRepository->findAll(),
            'services' => $serviceRepository->findAll(),
        ]);
    }

    //route avec slug 
    /**
     * @Route("/blog/{slug}", name="app_blog_show")
     */
    public function show(RealisationRepository $realisationRepository,  ServiceRepository $serviceRepository, $slug): Response
    {
        return $this->render('blog//article/show.html.twig', [
            'realisations' => $realisationRepository->findAll(),
            'services' => $serviceRepository->findAll(),
            'slug' => $slug,
        ]);
    }
}
