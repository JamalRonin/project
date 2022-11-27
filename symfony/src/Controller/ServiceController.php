<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service", name="app_service")
     */
    public function index(): Response
    {
        return $this->render('service/index.html.twig');
    }

// faire une route avec un slug 
    /**
     * @Route("/service/{slug}", name="app_service_show")
     */
    public function show($slug): Response
    {
        return $this->render('service/detail/show.html.twig', [
            'slug' => $slug,
        ]);
    }
}
