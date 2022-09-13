<?php

 if (isset($_POST['identifiant'])) { 
     $order_number = $_POST['identifiant'];
//      $order_number = 8;
     
    
    $req = "DELETE FROM `orders` WHERE `orders`.`order_number` = '$order_number'";
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'philippe');
    
    
    if ($mysqli->connect_errno) {
        echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
 
    
    if (!$mysqli->query($req) ) {
        echo "Echec lors de la creation de la table : (" . $mysqli->errno . ") " . $mysqli->error;
    } 
    
    echo "Success";

 }