<?php

namespace App\Controller;

use App\Entity\ExpertMember;
use App\Repository\ExpertMemberRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpertMembersController extends AbstractController
{
    /**
     * @Route("/expert-members", name="app_expert_members")
     */
    public function index(ExpertMemberRepository $expertMemberRepository): Response
    {
        $expertMembers = $expertMemberRepository->findAll();
        return $this->render('expert_members/index.html.twig', [
            'expertMembers' => $expertMembers,
        ]);
    }

    // route avec slug 
    /**
     * @Route("/expert-members/{slug}", name="app_member_show")
     */
    public function show($slug, ExpertMemberRepository $expertMemberRepository): Response
    {
        $expertMember = $expertMemberRepository->findOneBySlug($slug);
        dump($expertMember);
        return $this->render('expert_members/detail/show.html.twig', [
            'slug' => $slug,
            'expertMember' => $expertMember,
        ]);
    }
}
