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
        $realisation = $realisationRepository->findAll();
        return $this->render('home/index.html.twig', [
            'services' => $services,
            'realisations' => $realisation,
        ]);
    }

    /**
     * @Route("/apropos", name="app_about")
     */
    public function about(): Response
    {
        return $this->render('apropos/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/faq", name="app_faq")
     */
    public function faq(): Response
    {
        return $this->render('faq/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/devis", name="app_devis")
     */
    public function devis(): Response
    {
        return $this->render('devis/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}

