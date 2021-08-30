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

<h1>Détail de la Moto <?php echo($motodetail->getBrand());?></h1>



<h2>C'est un modèle <?php echo($motoDetail->getModel());?></h2>
</body>
</html>