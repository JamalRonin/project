<?php

namespace App\Controller;

use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service", name="app_service")
     */
    public function index(ServiceRepository $serviceRepository): Response
    {
        $services = $serviceRepository->findAll();

        return $this->render('service/index.html.twig', [
            'services' => $services,
        ]);
    }

// faire une route avec un slug 
    /**
     * @Route("/service/{slug}", name="app_service_show")
     */
    public function show($slug,ServiceRepository $serviceRepository): Response
    {

        $service = $serviceRepository->findOneBy(['slug' => $slug]);
        $title =    $service->getTitle()->getValues();
        $about =    $service->getAbout()->getValues();
        $chooseUs = $service->getChooseUs()->getValues();
        dump($title);
        return $this->render('service/detail/show.html.twig', [
            'slug' => $slug,
            'service' => $service,
            'title' => $title,
            'about' => $about,
            'chooseUs' => $chooseUs,

        ]);
    }
}
