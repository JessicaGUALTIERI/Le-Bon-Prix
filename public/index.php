<?php
    session_start();
    require('functions.php');
    require('header.html');
?>

<div class="container">
    <div class="item">
        <img src="<?= $itemImg; ?>" alt="illustration de l'item"/>
        <div class="desc">
            <p class="name">
                <?= $itemName; ?>
            </p>
            <form action="" method="post">
                <input type="number" name="nombreUtilisateur">
                <button type="submit" class="btn btn-dark">Deviner</button>
            <form>
        </div>
    </div>
</div>
<script src="js/bundle.js"></script>


<?php
    require('footer.html');
?>