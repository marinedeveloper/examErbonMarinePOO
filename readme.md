1. 5 méthodes magiques :

- Constructeur __construct() = permet de construire un objet. Utilisée au début du script.

ex : <?php
class Jeux
{
    private $nom;

    public function __construct($nom){
        $this->nom = $nom;
    }
}

?>

- Destructeur __destruct() = Fait un traitement quand l'objet est détruit. Utilisé a la fin du script.

ex:
<?php

class Jeux{
    public function __destruct(){
        echo('Je déstruis mon Jeu);
    }
}

?>

- Getter __get() = permet de détecter l'acces a un attribut qui n'existe pas. Il a comme paramètre le nom de l'attribut

<?
class Jeux{
    private $nom;
    private $genre;

    public function __get($nom, $genre){
    }
}

$jeu = new Jeux();
echo($jeu->name);
$name = $jeu->name;

?>

- Setter __set() = permet de détecter le changement d'un attribut qui n'existe pas ou est privé. Il a en paramètre la valeur qu'on lui indique et le nom de l'argument.

<?
class Jeux{
    private $nom;
    private $genre;

    public function __set($nom, $value){
    
    }
}

$jeu = new Jeux();
$jeu->name = 'Final Fantasy';
$jeu->genre = 'RPG';
$jeu->genre ='Aventure':

?>



- __isset() = Quand on utilise la fonction isset sur un attribut, il renvoie un booleen. Elle détermine si une variable est déclarée et est différente de nulle.

<?
  
  $jeu ='';

  if (isset($jeu)){
      echo 'Cette variable existe';
  }
?>



