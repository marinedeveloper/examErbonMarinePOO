<?php 

session_start();

require 'autoload.php';

if (!isset($_GET['controller'])) {
    header('Location: http://localhost/examen_poo/index.php?controller=moto&action=list');
} 


if($_GET['controller'] == 'moto'){
    $controller = new MotolistController();

    if($_GET['action'] == 'list'){
        $controller->list();
    }

    if ($_GET['action'] == 'remove' && isset($_GET['id_motos'])) {
    
        $controller->remove($_GET['id_motos']);
    }

   
    if($_GET['action']=='ajout'){
        $controller->add();
    }

    if ($_GET['action'] == 'submitForm') {

         $controller->submitForm();
     }
 }
   



    if($_GET['controller'] == 'security' ){
    $controller = new SecurityController();

        if($_GET['action'] == 'login'){
        
            $controller->login();
        }

        if($_GET['action'] == 'logout'){
        
            $controller->logout();
        }
        
    }




?>