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
<div class="container">
   
<form method="post" action="index.php?controller=moto&action=submitForm">
    <div class="form-group">
        <label for="exampleInputEmail1">Le nom de la Marque</label>
        <input type="text" name="brand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="brand">
   </div>
    <div class="form-group">
        <label for="exampleInputEmail2">Lemodèle de la moto</label>
        <input type="text" name="model" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="model">
   </div>
 
    <div class="form-group">
            <label for="type">Types</label>
            <select class="form-control" id="type" name="type">
                <?php
                foreach ($allMotos as $moto){
                    echo('<option value="'.$moto->getType().'">'.$motos->getType().'</option>');
                }
                ?>
            </select>
        </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</body>