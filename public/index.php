<?php
    require('functions.php');
    require('header.html');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Bon Prix</title>
    <link href=".//css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="item">
            <img src="<?php displayItemImg() ?>" alt="illustration de l'item"/>
            <div class="desc">
                <p class="title">
                    <?php displayItemTitle(); ?>
                    <!--Prix = <?php displayItemPrice(); ?>-->
                </p>
                <form action="" method="post">
                    <input type="number" name="nombreUtilisateur">
                    <button type="submit" class="btn btn-dark">Deviner</button>
                <form>
            </div>
        </div>
    </div>
    <script src="js/bundle.js"></script>
</body>
</html>

<?php
    require('footer.html');
?>