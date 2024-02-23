<?php
    require('functions.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le jeu du + ou du -</title>
    <link href="./css/main.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="container">
                <img src="./img/logo.png" alt="Logo">
                <h1>Le Bon Prix</h1>
                Menu
            </div>
        </div>
    </header>

    <div class="rules">
        <p>
            Le but du Bon Prix est simple : retrouvez le prix de l'objet présenté ! Vous disposez comme seules indications d'une image du produit et de son appelation. Bonne chance !
        </p>
    </div>
    <div class="item">
        <img src="
        <?php
            echo $donnee['img'];
        ?>
        " alt="illustration de l'item"/>

        <p>
            Prix = 
            <?php
            echo $donnee['prix'];
            ?>
        </p>
    </div>
</body>
</html>