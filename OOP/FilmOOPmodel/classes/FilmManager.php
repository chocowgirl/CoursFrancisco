<?php

class FilmManager {

    public function insert (Film $film){
        include "./connexion/db.php";

        try{
            $cnx = new PDO(DSN, USERNAME, PASSWORD);
        }
        catch (Exception $e){
            echo "Erreur de connexion";
            die();
        }

        $sql = "INSERT INTO film (id, titre, duree, description, dateSortie, image) VALUES" . "(null, :titre, :duree, :description, : dateSortie, :image";

        $stmt =$cnx->prepare($sql);
        $stmt->bindvalue(":titre", $film->getTitre());
        $stmt->bindvalue(":duree", $film->getDuree());
        $stmt->bindvalue(":description", $film->getDescription());
        $stmt->bindvalue(":dateSortie", $film->getDateSortie());
        $stmt->bindvalue(":image", $film->getImage());

        $stmt->execute();
    }




}






?>