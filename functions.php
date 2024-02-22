<?php

require_once('connexion.php');
$connexion;

try {
    $connexion = new PDO("mysql:host=$MYSQL_DBHOST;port=$MYSQL_DBPORT;dbname=$MYSQL_DBNAME", $MYSQL_DBUSER, $MYSQL_DBPASS);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit();
}

$stmt = $connexion->query('SELECT * FROM item WHERE id=1');
$stmt->execute();
$donnee = $stmt->fetch();
?>