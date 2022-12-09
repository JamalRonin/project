<?php

namespace App\Controller;

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
    public function index(ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        return $this->render('home/index.html.twig', [
            'services' => $services,
            'realisations' => $realisations,
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
}

