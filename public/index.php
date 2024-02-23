<?php
    require('functions.php');

    require('header.html');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="rules">
        <p>
            Le but du Bon Prix est simple : retrouvez le prix de l'objet présenté ! Vous disposez comme seules indications d'une image du produit et de son appelation. Bonne chance !
        </p>
    </div>
    <div class="item">
        <img src="<?php displayItemImg() ?>" alt="illustration de l'item"/>
        <p>
            Prix = <?php displayItemPrice(); ?>
        </p>
    </div>
    <script src="js/bundle.js"></script>
</body>
</html>