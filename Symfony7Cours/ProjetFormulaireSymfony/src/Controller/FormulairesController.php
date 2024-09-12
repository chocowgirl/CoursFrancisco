<?php

namespace App\Controller;

use App\Entity\Aeroport;
use App\Form\AeroportType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormulairesController extends AbstractController
{
    #[Route('/formulaires', name: 'app_formulaires')]
    public function index(): Response
    {
        return $this->render('formulaires/index.html.twig');
    }

    #[Route('/formulaires/aeroport/afficher')]
    public function aeroportAfficher(Request $req, ManagerRegistry $doctrine){
        //on cree une etntié vide
        $aeroport = new Aeroport();

        //on cree le form and associe l'entité au form
        $form = $this->createForm(AeroportType::class, $aeroport);

        //gerer l'objet request. Cet objet contiendra un GET ou un POST
        $form->handleRequest($req);

        //si c'est POST on va visualiser le contenu de l'entité
        if ($form->isSubmitted() && $form->isValid()){
            $em = $doctrine->getManager();
            $em->persist($aeroport);
            $em->flush();
            // dd($aeroport);

            //possibilité de montrer une autre vue
            // return $this->render('formulaires/une_autre_vue.html.twig')

            //poossibilité de renvoyer vers une autre action
            //return $this->redirectToRoute("name_autre_action"{param1: $val1, param2:$val2})
        }


        $vars = ['formulaireAeroport'=> $form];

        return $this->render('formulaires/aeroport_afficher.html.twig', $vars);
    }



}
