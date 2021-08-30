<html>
<head>
    <?php
    include 'Vue/parts/stylesheets.php'
    ?>
</head>
<body>
<div class="container">
    <?php
        include 'Vue/parts/header.php';
    ?>
    <h1>Ajout d'une Moto</h1>
   
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="brand">La marque</label>
            <input name="brand" type="text" class="form-control" id="brand" aria-describedby="nomHelp" placeholder="Entrez la marque">
        </div>
        <div class="form-group">
            <label for="model">Le modèle</label>
            <input name="model" type="text" class="form-control" id="model" aria-describedby="modelHelp" placeholder="Entrez le modèle">
        </div>

        <div class="form-group">
            <label for="category">Type</label>
            <select class="form-control" id="type" name="type">
                <?php
                foreach ($allMotos as $moto){
                    echo('<option value="'.$moto->getType().'">'.$moto->getType().'</option>');
                }
                ?>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
</body>
</html>
