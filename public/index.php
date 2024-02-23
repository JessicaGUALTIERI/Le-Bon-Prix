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
    <div class="container">
        <div class="item">
            <img src="<?php displayItemImg() ?>" alt="illustration de l'item"/>
            <p>
                <?php displayItemTitle(); ?>
                <!--Prix = <?php displayItemPrice(); ?>-->
            </p>
        </div>
    </div>
    <script src="js/bundle.js"></script>
</body>
</html>