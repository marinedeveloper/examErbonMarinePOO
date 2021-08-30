<?php
class SecurityController{
   
    private $userManager;


    public function __construct(){
        $this->userManager = new UserManager();
    }

  
    public function login(){
        $errors = [];
       
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            include 'Vue/login.php';
           
        } else {
         
            if(empty($_POST['username'])){
                $errors[] = 'Veuillez saisir un user';
            }

           
            if(empty($_POST['password'])){
                $errors[] = 'Veuillez saisir un mot de passe';
            }
            $userWithThisUsername = $this->userManager->findByUsername($_POST['username']);

            
            if(count($userWithThisUsername) == 0){
                $errors[] = 'Cet email n\'est pas connue.';
            } else {
               
                $utilisateur = $userWithThisUsername[0];

             
                if(password_verify($_POST['password'], $utilisateur->getPassword())){
                  
                   $_SESSION['utilisateur'] = serialize($utilisateur);
                 
                   header("Location: index.php");
                } else {
              
                    $errors[] = 'Les identifiants sont incorrects';

                }
            }
          
            if(count($errors)>0){
             
                include 'Vue/login.php';
            }
        }

    }


    public function logout(){
        session_destroy();
    header("Location: index.php?controller=security&action=login");
    

    }
}
?>