<?php
    require('functions.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le jeu du + ou du -</title>
    <link href="main.css" rel="stylesheet">
</head>
<body> 
    <div>
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