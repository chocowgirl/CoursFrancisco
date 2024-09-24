<?php

namespace App\Controller;

use App\Form\SearchFiltreLivresType;
use App\Repository\LivreRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class FormSearchLivresFiltresController extends AbstractController
{
    #[Route('/livres/search', name: 'livres_search')]
    public function livresSearch(Request $req, LivreRepository $rep, SerializerInterface $serializer): Response
    {
        $form = $this->createForm(SearchFiltreLivresType::class);

        $form->handleRequest($req);

        //gestion du submit du form
        if ($form->isSubmitted()){
            // dd($form->getData());
            // $livres=$rep->findAll();
            $livres = $rep->livresEntresDeuxPrix($form->getData());
            // dump ($form->getData()); // les filtres
            // dd($livres); //le resultat de la requete

            $livresJson = $serializer->serialize($livres, 'json');
            // dd ($livresJson); //le resultat de la requete encodé en JSON
            return new Response($livresJson);
            // $vars = ['livres'=>$livres];
            // // dd($livres);
            // // return $this->render('form_search_livres_filtres/livres_search_afficher.html.twig');
            // // $rep->findAll();
            // // Ceci (findAll) nous donne un array des objets
            // return $this->redirectToRoute('livres_search_afficher_resultat');
            
        }

        $vars = ['form' => $form];

        return $this->render('form_search_livres_filtres/livres_search.html.twig', $vars);
    }

    #[Route('/livres/search/afficher/resultat', name: 'livres_search_afficher_resultat')]
    public function livresSearchAfficherResultat (){
        // return $this->render('form_search_livres_filtres/livres_search_afficher_resultat.html.twig');
        return $this->redirectToRoute('livres_search_afficher_resultat');

    }


}
