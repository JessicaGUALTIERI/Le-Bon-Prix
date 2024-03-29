<?php
    require('functions.php');
    require('header.html');
?>

    <div class="container">
        <div class="item">
            <img src="<?= $_SESSION['img']; ?>" alt="illustration de l'item"/>
            <div class="desc">
                <div class="name title">
                    <p>
                        <?= $_SESSION['name']; ?>
                    </p>
                </div>
                <p class="clue">
                    <?php 
                        if ($wrongGuess) {
                            echo $clue;
                        }
                    ?>
                </p>
                <form action="" method="post">
                    <input type="number" name="nombreUtilisateur">
                    <button type="submit" class="btn-23">
                        <span class="text">Deviner</span>
                        <span aria-hidden="" class="marquee">Deviner</span>
                    </button>
                <form>
            </div>
        </div>
    </div>

<script src="js/bundle.js"></script>


<?php
    require('footer.html');
?>