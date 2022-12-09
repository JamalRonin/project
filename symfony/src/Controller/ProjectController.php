<?php

namespace App\Controller;

use App\Repository\RealisationRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="app_project")
     */
    public function index(RealisationRepository $realisationRepository, ServiceRepository $serviceRepository): Response
    {
        $realisations = $realisationRepository->findAll();
        $services = $serviceRepository->findAll();

        return $this->render('project/index.html.twig', [
            'realisations' => $realisations,
            'services' => $services,
        ]);
    }

    //slug is the name of the route parameter
    /**
     * @Route("/project/{slug}", name="app_project_show")
     */
    public function show(RealisationRepository $realisationRepository, string $slug, ServiceRepository $serviceRepository): Response
    {
        $realisation = $realisationRepository->findOneBy(['slug' => $slug]);
        $sliders = $realisation->getSlider()->getValues();
        $detail = $realisation->getDetail()->getValues();
        $checklist = $realisation->getChecklist()->getValues();
        $cleaningGuide = $realisation->getCleaningGuide()->getValues();
        $realisations = $realisationRepository->findAll();
        $services = $serviceRepository->findAll();
        return $this->render('project/detail/show.html.twig', [
            'realisation' => $realisation,
            'sliders' => $sliders,
            'detail' => $detail,
            'checklist' => $checklist,
            'cleaningGuide' => $cleaningGuide,
            'realisations' => $realisations,
            'services' => $services,

        ]);
    }
}
