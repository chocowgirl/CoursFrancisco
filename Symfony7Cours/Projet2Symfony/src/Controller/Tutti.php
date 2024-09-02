<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Tutti extends AbstractController{
 //Actions (methodes)
    #[Route('/accueil/{nom}')]
    function accueil(Request $req){
        $array = [1,2,"exact"];
        // dd($array);  dd = var_dump + die commands
        // dd($req);
        return new Response("Aloha " . $req->get('nom'));

    }

};



