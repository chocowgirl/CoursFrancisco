<?php

namespace App\Controller;

use App\Entity\Aeroport;
use App\Form\AeroportType;
use App\Repository\AeroportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\ManagerRegistry as DoctrineManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormulairesController extends AbstractController
{
    public ManagerRegistry $doctrine;

    //injecter le managerregistry dans le constructeur
    public function __construct(ManagerRegistry $doctrine){
        $this->doctrine = $doctrine;
    }


    #[Route('/formulaires', name: 'app_formulaires')]
    public function index(): Response
    {
        return $this->render('formulaires/index.html.twig');
    }

    #[Route('/formulaires/aeroport/afficher')]
    public function aeroportAfficher(Request $req){
        //on cree une etntié vide
        $aeroport = new Aeroport();

        //on cree le form and associe l'entité au form
        $form = $this->createForm(AeroportType::class, $aeroport);

        //gerer l'objet request. Cet objet contiendra un GET ou un POST
        $form->handleRequest($req);

        //si c'est POST on va visualiser le contenu de l'entité
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->doctrine->getManager();
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


    //action qui affiche tous les aeroports
    #[Route('/formulaires/afficher/aeroports', name:'afficherAeroports')]
    public function afficherAeroports(){
        //obtenir tous les aeroports de la BD
        $em = $this->doctrine->getManager();
        // $rep = $em->getRepository(Aeroport::class);
        // $aeroports = $rep->findAll();
        // //ou
        $aeroports = $em->getRepository(Aeroport::class)
        ->findAll();
        // dd($aeroports);


        //envoyer l'array d'aeroports a la vue
        $vars =['aeroports'=> $aeroports,
                'message'=> 'hello hello'];

        return $this->render ('formulaires/afficher_aeroports.html.twig', $vars);

    }


    //update de l'aeroport (affichage et tratement du formulaire)
    #[Route('/formulaires/update/aeroport/{id}', name:'updateAeroport')]
    public function updateAeroport(Request $req, AeroportRepository $rep, EntityManagerInterface $em){

        $id = $req->get('id');
        $aeroport = $rep->find ($id);
        // dd($aeroport);
    
        $form = $this->createForm(AeroportType::class, $aeroport);

        $form->handleRequest($req);

        if ($form->isSubmitted()){
            //on a cliqué submit
            $em->flush();
            dd($aeroport);
        }

        $vars = ['form'=>$form];

        return $this->render('formulaires/update_aeroport.html.twig', $vars);

    }

    #[Route('/formulaires/delet/aeroport/{id}', name:'deleteAeroport')]
    public function deleteAeroport(Request $req, AeroportRepository $rep, EntityManagerInterface $em){
        //obtenir l'id de l'aeroport à effacer
        $id = $req->get('id');

        //obtenir l'aeroport de la bd
        $aeroport = $rep->find($id);

        //lancer remove
        $em->remove($aeroport);

        //lancer flush
        $em->flush();

        //quoi faire après le delete?
        //Dans ce cas rediriger vers l'affichage de tous les aeroports
        return $this->redirectToRoute('afficherAeroports');

    }


}
