<?php
class MotoDetailController extends AuthentificationController{
    private $motoManager;
    private $motosDetail;

    public function __construct(){
        parent::__construct();

        $this->motoManager = new MotolistManager();
        $this->motosDetail= new MotoDetailManager();

    }

    public function list(){
        $motoDetail = $this->motoManager->findAll();
        include 'Vue/moto-list.php';
    }

   

      
   

}

?>