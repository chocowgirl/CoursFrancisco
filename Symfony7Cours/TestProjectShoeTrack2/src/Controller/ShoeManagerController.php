<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShoeManagerController extends AbstractController
{
    #[Route('/shoe/manager', name: 'app_shoe_manager')]
    public function index(): Response
    {
        return $this->render('shoe_manager/index.html.twig', [
            'controller_name' => 'ShoeManagerController',
        ]);
    }
}
