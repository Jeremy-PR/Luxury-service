<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/jobs', name: 'jobs_index')]
    public function showIndexJob(): Response
    {
        return $this->render('jobs/job_index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/all_jobs', name: 'jobs_all')]
    public function showAllJob(): Response
    {
        return $this->render('jobs/all_jobs.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('authentificator/login.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/profil', name: 'app_profil')]
    public function profil(): Response
    {
        return $this->render('authentificator/profil.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/register', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('authentificator/register.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('others/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }



    
    #[Route('/company', name: 'app_company')]
    public function company(): Response
    {
        return $this->render('others/company.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

}
