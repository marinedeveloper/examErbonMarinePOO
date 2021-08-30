<?php 


class MotolistController extends AuthentificationController{


    private $motoManager;
    public $user;

    public function __construct(){
        parent::__construct();

      $this->motoManager = new MotolistManager();
       
    }

    public function list(){
        $allMotos = $this->motoManager->findAll();

        include 'Vue/moto-list.php';
    }

    public function remove($id){
        $this->motoManager->remove($id);

        header("Location: index.php?controller=moto&action=list");
    
    }

    public function add() {
        $allMotos = $this->motoManager->findAll();
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            include 'Vue/moto-add.php';

        }
    }
    public function displayForm(){
       
       include 'Vue/moto-form.php';
    }

    public function insert(Moto $moto){
        try{
        $request = $this->bdd->prepare("INSERT INTO motos (brand, model, type, image)
        VALUE (:brand, :model, type, image)");

        $request->execute(['brand'=> $moto->getBrand(), 'model'=> $moto->getModel(), 'type'=>$moto->getType()]);
        } catch (\PDOException $e){
            throw $e;
        }
    }

    public function detail($id){
        $motoManager = $this->motoManager->find($id);
        include 'Vue/detail.php';
    }
  

}

?>