<?php
    session_start();
    require('functions.php');
    require('header.html');
?>

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


<?php
    require('footer.html');
?>