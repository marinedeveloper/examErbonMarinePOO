<?php 

class UserManager extends Database{

    public function findByUsername($username){
        $requete = $this->bdd->prepare("SELECT * FROM utilisateur WHERE username = :username");
        $requete->execute(['username'=>$username]);

        $resultatsPdo = $requete->fetchAll();

        $resultatObject = $this->transformPdoToArrayObject($resultatsPdo);

        return $resultatObject;

    }

    public function findOneByUsername($username){
        $requete = $this->bdd->prepare("SELECT * FROM utilisateur WHERE username = :username");
        $requete->execute(['username'=>$username]);

        $item = $requete->fetch();


        return new User($item['username'], $item['password'], $item['id']);;

    }


    private function transformPdoToArrayObject($resultatsPdo){
        $objectArray = [];

        foreach ($resultatsPdo as $item) {
            $objectArray[] = new User($item['username'], $item['password'], $item['id']);
        }

        return $objectArray;
    }
}



?>