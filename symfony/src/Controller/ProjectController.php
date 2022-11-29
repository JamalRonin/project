<?php

namespace App\Controller;

use App\Repository\RealisationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="app_project")
     */
    public function index(RealisationRepository $realisationRepository): Response
    {
        $realisations = $realisationRepository->findAll();
        return $this->render('project/index.html.twig', [
            'realisations' => $realisations,
        ]);
    }

    //slug is the name of the route parameter
    /**
     * @Route("/project/{slug}", name="app_project_show")
     */
    public function show(RealisationRepository $realisationRepository, string $slug): Response
    {
        $realisation = $realisationRepository->findOneBy(['slug' => $slug]);
        $sliders = $realisation->getSlider()->getValues();
        return $this->render('project/detail/show.html.twig', [
            'realisation' => $realisation,
            'sliders' => $sliders,
        ]);
    }
}
