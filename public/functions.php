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

pickItemId();

function pickItemId() {
    global $idRandom;
    global $connexion;
    $stmt = $connexion->query('SELECT COUNT(*) AS total FROM item');
    $stmt->execute();
    $totalEntreesBDD = $stmt->fetch();
    $totalEntreesBDD = $totalEntreesBDD['total'];
    $idRandom = rand(1, $totalEntreesBDD);
}

function displayItemImg() {
    global $idRandom;
    global $connexion;
    global $donnee;
    $stmt = $connexion->query('SELECT * FROM item WHERE id='.$idRandom);
    $stmt->execute();
    $donnee = $stmt->fetch();
    echo $donnee['img'];
}

function displayItemPrice() {
    global $donnee;
    echo $donnee['prix'];
}




?>