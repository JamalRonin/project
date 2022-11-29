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
}
