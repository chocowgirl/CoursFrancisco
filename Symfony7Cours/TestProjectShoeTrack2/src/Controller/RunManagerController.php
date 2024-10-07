<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RunManagerController extends AbstractController
{
    #[Route('/run/manager', name: 'app_run_manager')]
    public function index(): Response
    {
        return $this->render('run_manager/index.html.twig', [
            'controller_name' => 'RunManagerController',
        ]);
    }
}
