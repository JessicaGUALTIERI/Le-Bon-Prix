<?php
    session_start();

require_once('connexion.php');
$connexion;

try {
    $connexion = new PDO("mysql:host=$MYSQL_DBHOST;port=$MYSQL_DBPORT;dbname=$MYSQL_DBNAME", $MYSQL_DBUSER, $MYSQL_DBPASS);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit();
}

$idRandom;
$donnee;
$totalEntreesBDD = getCountOfItems();
$idRandom = rand(1, $totalEntreesBDD);
$nombreUtilisateur;
$wrongGuess = false;
$clue;
if (!isset($_SESSION['img'])) {
    $_SESSION['img'] = getItemImg($idRandom);
}
if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = getItemName($idRandom);
}
if (!isset($_SESSION['price'])) {
    $_SESSION['price'] = getItemPrice($idRandom);
}
if ($_POST) {
    if (!empty($_POST['nombreUtilisateur'])) {
        $nombreUtilisateur = $_POST['nombreUtilisateur'];
        echo $nombreUtilisateur;
    }
    if ($nombreUtilisateur == $_SESSION['price']) {
        echo '<script type="text/javascript">window.alert("Félicitations vous avez trouvé Le Bon Prix !");</script>';
        session_unset();
        header("refresh: 0");
    } else if ($nombreUtilisateur > $_SESSION['price']) {
        $wrongGuess = true;
        $clue = "C'est moins !";
    } else if ($nombreUtilisateur < $_SESSION['price']) {
        $wrongGuess = true;
        $clue = "C'est plus !";
    } else {
        $wrongGuess = false;
    }
} 


function getCountOfItems() {
    global $connexion;
    $stmt = $connexion->query('SELECT COUNT(*) AS total FROM item');
    $stmt->execute();
    $totalEntreesBDD = $stmt->fetch();
    $totalEntreesBDD = $totalEntreesBDD['total'];
    return $totalEntreesBDD;
}

function getItemImg($idRandom) {
    global $connexion;
    $stmt = $connexion->query('SELECT img FROM item WHERE id='.$idRandom);
    $stmt->execute();
    $donnee = $stmt->fetch();
    return $donnee['img'];
}

function getItemName($idRandom) {
    global $connexion;
    $stmt = $connexion->query('SELECT nom FROM item WHERE id='.$idRandom);
    $stmt->execute();
    $donnee = $stmt->fetch();
    return $donnee['nom'];
}

function getItemPrice($idRandom) {
    global $connexion;
    $stmt = $connexion->query('SELECT prix FROM item WHERE id='.$idRandom);
    $stmt->execute();
    $donnee = $stmt->fetch();
    return $donnee['prix'];
}


?>