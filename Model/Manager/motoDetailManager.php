<?php 

class MotoDetailManager extends Database {

    public function findAll(){
       
        $requete = $this->bdd->prepare("SELECT * FROM motos");
    
        $requete->execute();
    
        $resultats = $requete->fetchAll();


        $arrayObjectResult = [];

        foreach ($resultats as $result){

            $arrayObjectResult[] = new Moto($result['brand'], $result['model'], $result['type'],  $result['id_motos']);
        }

        return $arrayObjectResult;
    }

    public function find($idMoto){
   
        $requete = $this->bdd->prepare("SELECT * FROM motos WHERE id-motos = :id_motos");
     
        $requete->execute(['id_motos'=> $idMoto]);

        $res = $requete->fetch();


        $moto = new Moto($res['brand'], $res['model'], $res['type'], $res['id_motos']);

        return $moto;
    }

}



?>