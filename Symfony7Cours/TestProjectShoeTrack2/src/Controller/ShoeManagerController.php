<?php

namespace App\Controller;

use App\Entity\Shoepair;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShoeManagerController extends AbstractController
{
    #[Route('/shoe/manager', name: 'app_shoe_manager')]
    public function indexShoes(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $rep = $em->getRepository(Shoepair::class);

        //notez que findBy renverra toujours in array même s'il trouve
        //qu'un objet
        $shoes = $rep->findBy([], ["currentWearKm"=>"DESC"]);
        $vars = ['shoes' => $shoes];
        return $this->render('shoe_manager/index_shoes.html.twig', $vars);
    }
}
