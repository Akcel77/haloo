<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TermsController extends AbstractController
{
    #[Route('/mentions-legales', name: 'terms')]
    public function index(): Response
    {
        return $this->render('terms/index.html.twig', [
            'controller_name' => 'TermsController',
        ]);
    }
}
