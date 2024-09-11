<?php

namespace App\Controller;

use App\Entity\Exemplaire;
use App\Entity\Livre;
use App\Repository\LivreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExemplesModeleController extends AbstractController
{
    #[Route('/exemples/modele', name: 'app_exemples_modele')]
    public function index(): Response
    {
        return $this->render('exemples_modele/index.html.twig');
    }


    #[Route('/exemple/insert')]
    public function exempleInsert (ManagerRegistry $doctrine){
        $em = $doctrine->getManager();
        // dd($em);
        $livre = new Livre();
        $livre->setTitre("La vie");
        $livre->setDescription("sur la vie");
        $livre->setDatePublication(new \DateTime());
        $livre->setIsbn("23556884455");
        $livre->setPrix(90);

        //avant l'insertion
        dump($livre);

        $em->persist($livre);
        $em->flush();

        //après l'insertion
        dd($livre);
    }
    
    #[Route('/exemple/update')]
    public function exempleUpdate (ManagerRegistry $doctrine){
        $em=$doctrine->getManager();
        //d'abord on cree un objet et on l'insere
        $livre = new Livre();
        $livre->setTitre("La vie 2");
        $livre->setDescription("sur la vie");
        $livre->setDatePublication(new \DateTime());
        $livre->setIsbn("23556884455");
        $livre->setPrix(90);

        $em->persist($livre);
        $em->flush();

        //on modifie le livre dans le domaine des objets
        $livre->setPrix(20);
        $em->flush();
        dd($livre);

    }

    //SELECT + UPDATE obtenir un livre de la BD et le mettre a jour
    #[Route('exemple/select/update')]
    public function exempleSelectUpdate(ManagerRegistry $doctrine){
        //obtenir un objet de la BD
        $em=$doctrine->getManager();
        $rep= $em->getRepository(Livre::class);
        //on va chercher par id ici:
        $livre= $rep->find(2);
        // dd($livre);

        //update objet de la BD
        $livre->setTitre('Bonjour tout va bien');
        //le flush suffit!!!
        $em->flush();
        dd($livre);
    }

//obtenir tous les livres (version standard)
    #[Route('exemple/select/all')]
    public function selectAll(ManagerRegistry $doctrine){
        $em=$doctrine->getManager();
        $rep = $em->getRepository(Livre::class);
        $tousLesLivres = $rep->findAll();
        dd($tousLesLivres[1]);
    }

//autre façon de le faire (simplification)
//obtenir tous les livres, mais on ne PEUT PAS FAIRE PERSIST ET FLUSH, JUSTE SELECT
//car dans le repository il y a QUE le SELECT.
//Les inserts et updates sont geres par l'entity Manager
    #[Route('exemple/select/all/inject/repo')]
    public function selectAllInjectRepo(LivreRepository $rep){
        $tousLesLivres= $rep->findAll();
        dd($tousLesLivres);
    }

    #[Route('exemple/select/all/inject/entity/manager')]
    public function selectAllInjetEntityManager(EntityManagerInterface $em){
        $rep = $em->getRepository(Livre::class);
        $tousLesLivres = $rep->findAll();
        dd($tousLesLivres);
    }

    #[Route('exemple/find/one/by')]
    public function findOneBy(ManagerRegistry $doctrine){
        //obtenir entity manager
        $em = $doctrine->getManager();
        //obtenir repository
        $rep=$em->getRepository(Livre::class);
        //on obtient l'OBJET, le filtre est envoyé sous la forme d'un array
        //(on peut rajouter des clés qui provoqueront an AND)
        $livre = $rep->findOneBy(['titre'=>'La vie 2', 'prix'=>20]);
        dd($livre);

    }

    //creer un livre avec 2 exemplaires
    #[Route('exemple/insert/livre/exemplaires')]
    public function exempleInsertLivreExemplaires(ManagerRegistry $doctrine){
        $livre = new Livre();
        $livre->setTitre("La vibration");
        $livre->setDescription("sur la vibration");
        $livre->setDatePublication(new \DateTime());
        $livre->setIsbn("23556880005");
        $livre->setPrix(190);

        $exemplaire1 = new Exemplaire();
        $exemplaire1->setEtat('bon');
        $exemplaire2 = new Exemplaire();
        $exemplaire2->setEtat('mauvais');


        $livre->addExemplaire($exemplaire1);
        $livre->addExemplaire($exemplaire2);

        $em=$doctrine->getManager();
        $em->persist($livre);
        // $em->persist($exemplaire1);
        // $em->persist($exemplaire2);

        $em->flush();
        dd($livre);
    }

    #[Route('exemple/delete/livre/exemplaires')]
    public function exempleDeleteLivreExemplaires(ManagerRegistry $doctrine){
        $em=$doctrine->getManager();
      //on obtient le livre d'abord
      $rep = $em->getRepository(Livre::class);
      $livre = $rep->find(10);

      //on efface le livre
      $em->remove($livre);
      $em->flush();
      dd();

    }


}