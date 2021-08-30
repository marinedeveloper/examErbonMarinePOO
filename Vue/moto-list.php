<html>
<head>
    <?php
    include 'Vue/parts/stylesheets.php';
    ?>
</head>
<body>
<?php
include 'Vue/parts/header.php';
?>
<h1>Voici la liste des Motos</h1>



<table class="table ">
    <thead>
    <tr>
        <th scope="col bg-secondary ">#</th>
        <th scope="col">Marque</th>
        <th scope="col">Modele</th>
        <th scope="col">Type</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
     foreach ($allMotos as $moto){
         echo(' <tr>
        <th scope="row">'.$moto->getId().'</th>
        <td>'.$moto->getBrand().'</td>
        <td>'.$moto->getModel().'</td>
        <td>'.$moto->getType().'</td>
        <td>'.$moto->getImg().'</td>
        <td><a href="index.php?controller=moto&action=remove&id='.$moto->getId().'">
        Supprimer</a></td>

    </tr>');

     }
   
    ?>
    </tbody>
</table>

<a href="index.php?controller=moto&action=ajout">Ajouter une Moto</a>

<?php
include 'Vue/parts/script.php';
?>
</body>
</html>