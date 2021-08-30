<?php 

class MotolistManager extends Database{



    public function findAll(){
       $request = $this->bdd->prepare("SELECT * FROM motos");
       $request->execute();
       $result = $request->fetchAll();

       $arrayCategories = $this->transformArrayResultToArrayObject($result);

       return $arrayCategories;
    }

    public function findByType($type){
        $request = $this->bdd->prepare(
            "SELECT * FROM motos WHERE type = :type");
        $request->execute(['brand'=> $type]);

        $result = $request->fetchAll();

        $arrayCategories = $this->transformArrayResultToArrayObject($result);

        return $arrayCategories;
    }

    public function find($id){
        
        $requete = $this -> bdd->prepare("SELECT * FROM motos WHERE id_motos = :id_motos");

        $requete->execute(['id_motos'=>$id]);

        $res = $requete->fetch();

        $equipe = new Moto($res['brand'], $res['model'], $res['type'],$res['image'], $res['id_motos']);

        return $equipe;

    }


    public function remove($id){
        $request = $this->bdd->prepare('DELETE FROM motos WHERE id_motos = :id_motos');
        $request->execute([':id_motos' => $id]);
    }

    public function insert(Moto $moto){
        try{
        $request = $this->bdd->prepare("INSERT INTO motos (brand, model, type, image)
        VALUE (:nom, :ordre_affichage)");

        $request->execute(['brand'=> $moto->getBrand(), 'model'=> $moto->getModel(), 'type'=> $moto->getType(), 'image'=>$moto->getImg()]);
        } catch (\PDOException $e){
            throw $e;
        }
    }
    

    private function transformArrayResultToArrayObject($arrayOfArray){
        $arrayCategories = [];

        foreach ($arrayOfArray as $elem){
            $arrayCategories[] = new Moto($elem["brand"], $elem['model'], $elem["type"], $elem['image'], $elem['id_motos']);
        }

        return $arrayCategories;
    }
}






?>