<?php
include ('db_config.php');
$Nom = htmlspecialchars($_POST["Nom_visiteur"]);
$Email = htmlspecialchars($_POST["Email_visiteur"]);
$Numtel = htmlspecialchars($_POST["Numtel_visiteur"]);
$Demande = htmlspecialchars($_POST["Demande_visiteur"]);

    $mysqli = new mysqli('127.0.0.1', $dbuser, $dbpass, $db);
    $sql = "INSERT INTO visiteur (idvisiteur,Nom_visiteur,Email_visiteur, Numtel_visiteur,Demande_visiteur)
VALUES (NULL,'$Nom', '$Email','$Numtel','$Demande')";
    
    $result = $mysqli->query($sql);
    if ($result)  {header('Location: index.php?erreure=2#formulaire');}
    else {header('location: index.php?erreure=1#formulaire');}
    