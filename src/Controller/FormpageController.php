<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FormpageController extends AbstractController
{
    #[Route('/form', name: 'app_formpage')]
    public function index(): Response
    {
        return $this->render('formpage/index.html.twig', [
            'controller_name' => 'FormpageController',
        ]);
    }
}
