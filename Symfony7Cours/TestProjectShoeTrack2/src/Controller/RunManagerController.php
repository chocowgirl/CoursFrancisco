<?php

namespace App\Controller;

use App\Entity\Activity;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RunManagerController extends AbstractController
{
    #[Route('/run/manager', name: 'app_run_manager')]
    public function indexAllRuns(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $rep = $em->getRepository(Activity::class);

        // notez que findBy renverra toujours un array même s'il trouve 
        // qu'un objet
        $activities = $rep->findBy([], ["activityDate"=>"DESC"]);
        $vars = ['activities' => $activities];

        return $this->render('run_manager/index_runs.html.twig', $vars);
    }
}

// #[Route ("/exemples/modele/exemple/find/all")]
// public function exempleFindAll(ManagerRegistry $doctrine)
// {
//     $em = $doctrine->getManager();
//     $rep = $em->getRepository(Livre::class);

//     // notez que findBy renverra toujours un array même s'il trouve 
//     // qu'un objet
//     $livres = $rep->findAll();
//     $vars = ['livres' => $livres];

//     return $this->render("exemples_modele/exemple_find_all.html.twig", $vars);
// }