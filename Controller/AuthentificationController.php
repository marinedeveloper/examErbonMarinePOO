<?php


abstract class AuthentificationController{

    public function __construct(){
        if(!isset($_SESSION['utilisateur'])){
              
            header('Location:index.php?controller=security&action=login');
        }
    }

}

?>