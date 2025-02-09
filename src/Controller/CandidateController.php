<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CandidateController extends AbstractController{
    #[Route('/profil', name: 'app_candidate')]
    public function index(): Response
    {
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'CandidateController',
        ]);
    }
}
