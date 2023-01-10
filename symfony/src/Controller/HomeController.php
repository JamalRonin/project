<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\RealisationRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository, ArticleRepository $articleRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        $articles = $articleRepository->findAll();
        return $this->render('home/index.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/apropos", name="app_about")
     */
    public function about(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('apropos/index.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
        ]);
    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('contact/index.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
        ]);
    }

    /**
     * @Route("/faq", name="app_faq")
     */
    public function faq(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('faq/index.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
        ]);
    }

    /**
     * @Route("/devis", name="app_devis")
     */
    public function devis(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('devis/index.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
        ]);
    }

    /**
     * @Route("/mentions-legales", name="app_mentions")
     */
    public function mentions(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('legale/mentionsLegales.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
        ]);
    }

    /**
     * @Route("/politique-de-confidentialite", name="app_confidentialite")
     */
    public function confidentialite(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('legale/politiqueDeConfidentialite.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
        ]);
    }

    /**
     * @Route("/cgv", name="app_cgv")
     */
    public function cgv(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('legale/cgv.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
        ]);
    }

    /**
     * @Route("/cookies", name="app_cookies")
     */
    public function cookies(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('legale/cookies.html.twig', [
            'services' => $services,
            'realisations' => $realisations,            
        ]);
    }

    /**
     * @Route("/sitemap", name="app_sitemap")
     */
    public function sitemap(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('sitemap/index.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
        ]);
    }
}

