<?php
    require('functions.php');
    require('header.html');
?>

<div class="container">
    <div class="item">
        <img src="<?= $_SESSION['img']; ?>" alt="illustration de l'item"/>
        <div class="desc">
            <p class="name">
                <?= $_SESSION['name']; ?>
            </p>
            <p class="title clue">
                <?php 
                    if ($wrongGuess) {
                        echo $clue;
                    }
                ?>
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