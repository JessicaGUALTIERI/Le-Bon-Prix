<?php

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
$itemImg = getItemImg($idRandom);
$itemName = getItemName($idRandom);
$itemPrice = getItemPrice($idRandom);

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