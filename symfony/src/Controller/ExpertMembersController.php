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
}
