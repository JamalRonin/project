<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpertMembersController extends AbstractController
{
    /**
     * @Route("/expert-members", name="app_expert_members")
     */
    public function index(): Response
    {
        return $this->render('expert_members/index.html.twig', [
            'controller_name' => 'ExpertMembersController',
        ]);
    }

    // route avec slug 
    /**
     * @Route("/expert-members/{slug}", name="app_member_show")
     */
    public function show($slug): Response
    {
        return $this->render('expert_members/detail/show.html.twig', [
            'slug' => $slug,
        ]);
    }
}
