<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

class ExemplesTwigController extends AbstractController
{
    #[Route('/exemples/twig', name: 'app_exemples_twig')]
    public function index(): Response
    {
        return $this->render('exemples_twig/index.html.twig'); 
        // [
        //     'controller_name' => 'ExemplesTwigController',
        // ]);
    }

    #[Route('/exemples/frites')]
    public function frites():Response {

        //generer des données qui seraient passées à la vue
        $sauce = "samourai";
        $sel = "oui";

        $vars = ['sauce' => $sauce,
                'sel' => $sel];

        return $this->render ('exemples_twig/frites.html.twig', $vars);
    }

    #[Route('/exemples/personne')]
    public function personneShow():Response {
        $personne = ['nom'=>'Louise',
                    'hobby'=>'piloter'];

        $status = "employé";

        $vars = ['personne'=>$personne,
                'status'=>$status];

        return $this->render ('exemples_twig/personne_show.html.twig', $vars);
    }

    // ///array indexe
    // $marques = ['Audi', 'Renault', 'BMW'];
    // $vars = ['marques'=> $marques];

    // Créez une nouvelle action afficheTvacTwig qui reçoit une valeur d'un prix dans l'URL et une valeur de TVA et calcule le prix Tvac. Créez un twig qui affiche "Le prix TVAC est xxx"
    #[Route('/exemples/tvac/{prix}/{tauxTva}')]
    public function exoTva(Request $req) {
        $prix = $req->get ('prix');
        $tauxTVA = $req->get ('tauxTva');
        $prixTvac = $prix + $prix * ($tauxTVA/100);

        $vars = ['prixTvac'=>$prixTvac];

        return $this->render ('exemples_twig/tvac.html.twig', $vars);
    }

    // Créez une nouvelle action qui affiche le nom de trois villes belges. La liste de villes est envoyée depuis le controller à la vue dans un array. L'action reçoit un paramètre concernant la langue. Si la valeur du paramètre est FR les noms des villes seront affichés en FR. Si la valeur est NL les noms seront affichés en néerlandais
    #[Route('exemples/villes/{lang}')]
    public function afficherVilles(Request $req){
        $lang = $req->get ('lang');

        if ($lang === 'FR') {
            $villes = ['Mons', 'Liege', 'Bruxelles'];
        }

        else if ($lang === 'NL'){
        $villes = ['Bergen', 'Luik', 'Brussels'];
    }

        $vars = ['villes'=> $villes];

        return $this->render ('exemples_twig/villes.html.twig', $vars);
    }

    // Affichez la date actuelle dans la vue. Utilisez la classe DateTime et envoyez l'objet à la vue. Dans la vue, utilisez la méthode format de la classe DateTime pour afficher la date proprement
    #[Route('exemples/datetime')]
    public function afficherNow(){
        $now = new \DateTime();
        // dd($now);

        $vars = ['now'=>$now];

        return $this->render ('exemples_twig/datetime.html.twig', $vars);
    }

    // Créez une action qui reçoit un prix dans l'URL. Cette action reçoit le prix et le multiplie fois deux. Vérifiez dans la vue (pas dans le controller) que le prix ne dépasse pas 100 euros en utilisant une condition
    #[Route('exemples/{prix}')]
    public function afficherPrix(int $prix){

        $prixDouble = $prix*2;

        $vars = ['prixDouble'=>$prixDouble];

        return $this->render ('exemples_twig/prix.html.twig', $vars);

    }

}
