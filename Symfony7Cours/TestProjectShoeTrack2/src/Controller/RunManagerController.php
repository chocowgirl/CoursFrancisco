<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class RunManagerController extends AbstractController
{



    #[Route('/run/manager', name: 'app_run_manager')]
    public function indexRuns(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $rep = $em->getRepository(Activity::class);

        // notez que findBy renverra toujours un array même s'il trouve 
        // qu'un objet
        $activities = $rep->findBy(
            ['user' => $this->getUser()],
            ["activityDate" => "DESC"]
        );
        $vars = ['activities' => $activities];

        return $this->render('run_manager/index_runs.html.twig', $vars);
    }

    #[Route("/run/manager/update/{id}", name: 'update_activity')]
    public function updateActivity(
        ActivityRepository $rep,
        Request $req,
        ManagerRegistry $doctrine
    ): Response {
        // on obtient d'abord le run
        $activity = $rep->find($req->get('id'));

        $form = $this->createForm(ActivityType::class, $activity);

        $form->handleRequest($req);

        $vars = ['form' => $form];

        // dd($form->getErrors());

        if ($form->isSubmitted() && $form->isValid()) {
            $doctrine->getManager()->flush();

            return $this->redirectToRoute("app_run_manager");
        }
        return $this->render("run_manager/edit_run.html.twig", $vars);
    }


    #[Route("/run/manager/create", name: 'create_activity')]
    public function createActivity(
        ActivityRepository $rep,
        Request $req,
        ManagerRegistry $doctrine
    ): Response {
        // on obtient d'abord le run
        $activity = new Activity();

        $form = $this->createForm(ActivityType::class, $activity);

        $form->handleRequest($req);

        $vars = ['form' => $form];

        // dd($form->getErrors());

        if ($form->isSubmitted() && $form->isValid()) {
            $doctrine->getManager()->persist($activity);
            $doctrine->getManager()->flush();

            return $this->redirectToRoute("app_run_manager");
        }
        return $this->render("run_manager/edit_run.html.twig", $vars);
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
