<?php

namespace App\Controller;

use App\Entity\ExpertMember;
use App\Repository\ExpertMemberRepository;
use App\Repository\RealisationRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpertMembersController extends AbstractController
{
    /**
     * @Route("/expert-members", name="app_expert_members")
     */
    public function index(ExpertMemberRepository $expertMemberRepository, RealisationRepository $realisationRepository, ServiceRepository $serviceRepository): Response
    {
        $expertMembers = $expertMemberRepository->findAll();
        $realisations = $realisationRepository->findAll();
        $services = $serviceRepository->findAll();
        return $this->render('expert_members/index.html.twig', [
            'expertMembers' => $expertMembers,
            'realisations' => $realisations,
            'services' => $services,
        ]);
    }

    // route avec slug 
    /**
     * @Route("/expert-members/{slug}", name="app_member_show")
     */
    public function show($slug, ExpertMemberRepository $expertMemberRepository, ServiceRepository $serviceRepository, RealisationRepository $realisationRepository): Response
    {
        $expertMember = $expertMemberRepository->findOneBySlug($slug);
        $skills = $expertMember->getSkills()->getValues();
        $services = $serviceRepository->findAll();
        $realisations = $realisationRepository->findAll();
        dump($skills);
        return $this->render('expert_members/detail/show.html.twig', [
            'slug' => $slug,
            'expertMember' => $expertMember,
            'skills' => $skills,
            'services' => $services,
            'realisations' => $realisations,
        ]);
    }
}
