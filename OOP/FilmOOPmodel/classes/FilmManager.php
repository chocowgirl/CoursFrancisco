<?php
include "./connexion/db.php";

class FilmManager 
{
    private PDO $cnx;
    public function __construct(){

        try{
            $this->cnx = new PDO(DSN, USERNAME, PASSWORD);
        }
        catch (Exception $e){
            echo "Erreur de connexion";
            die();
        }
    }
   
    public function insert (Film $film)
    {
        $sql = "INSERT INTO film (id, titre, duree, description, dateSortie, image) VALUES" . "(null, :titre, :duree, :description, :dateSortie, :image)";

        $stmt =$this->cnx->prepare($sql);
        $stmt->bindvalue(":titre", $film->getTitre());
        $stmt->bindvalue(":duree", $film->getDuree());
        $stmt->bindvalue(":description", $film->getDescription());
        $stmt->bindvalue(":dateSortie", $film->getDateSortie()->format("Y-m-d"));
        $stmt->bindvalue(":image", $film->getImage());

        $stmt->execute();
        $id = $this->cnx->lastInsertId(); // on recupere l'id du dernier enregistrement inseree dans la bd
        $film->setId($id);
    }


    public function delete (Film $film){
        $sql = "DELETE FROM film WHERE id=:id";
        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":id", $film->getId());
        $stmt->execute();
        // var_dump($stmt->errorInfo());
        // die();
    }

    public function findAll ():array
    {
        $sql = "SELECT * FROM film";
        $stmt = $this->cnx->prepare($sql);
        $stmt->execute();
        $arrayArraysFilm = $stmt->fetchAll(PDO::FETCH_ASSOC); //un array d'arrays contenant les infos de chaque film (pas d'objets!)
        $arrayObjetsFilm = []; //notre array d'objets film

        foreach ($arrayArraysFilm as $arrayFilm){
            $arrayFilm['dateSortie'] = new DateTime($arrayFilm['dateSortie']);
            $arrayObjetsFilm[] = new Film($arrayFilm);

        }
        return ($arrayObjetsFilm);
    }

    public function update (Film $unFilm){
        $sql = "UPDATE film SET titre=:titre, duree=:duree, description=:description, dateSortie=:dateSortie WHERE id=:id";

        $stmt = $this->cnx->prepare($sql);
        $stmt->bindValue(":titre", $unFilm->getTitre());
        $stmt->bindValue(":duree", $unFilm->getDuree());
        $stmt->bindValue(":description", $unFilm->getDescription());
        $stmt->bindValue(":dateSortie", $unFilm->getDateSortie()->format("Y-m-d"));
        $stmt->bindValue(":id", $unFilm->getId());
        
        $stmt->execute();
    }

}






?>