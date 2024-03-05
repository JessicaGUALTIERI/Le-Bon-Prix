<?php
    require('functions.php');
    require('header.html');
?>

<div class="container rules">
    <h1 class="title">Règles du jeu</h1>
    <p>
        Le jeu vous propose de deviner le prix d'un objet sélectionné aléatoirement.</br>
        Vous aurez accès au nom du produit et l'image d'illustration.</br>
        En possession de ces éléments, vous êtes invités à saisir le prix estimé de l'objet.</br>
        Le jeu vous informera si votre estimation est correcte ou si elle est supérieure ou inférieure au prix réel !</br>
        Un nouvel objet apparaitra quand vous aurez trouvé <span class="slogan">le bon prix</span> !
    </p>
    <button onclick="window.location.href = 'index.php';" class="btn btn-dark">C'est parti !</button>
</div>

<script src="js/bundle.js"></script>

<?php
    require('footer.html');
?>