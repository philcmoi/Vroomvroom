<?php

if (isset($_POST['depart'], $_POST['arrive'], $_SESSION['idmembre']))
{
$lieudepart = htmlentities($_POST['depart']);
$lieuarrive = htmlentities($_POST['arrive']);
var_dump($_SESSION['idmembre']);
// $lieudepart = htmlentities('Paris');
// $lieuarrive = htmlentities('Bordeaux');
if (isset( $_SESSION['idmembre'])) {
$idmembre = $_SESSION['idmembre']; }
var_dump($idmembre);
// $idmembre = 1;

try {
    
    
    $PDO = new PDO('mysql:host=localhost;dbname=philippe','root','');
    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    
    $sql = "INSERT INTO trajet (depart, arrive, idmembre)
VALUES (:depart,:arrive,:idmembre)";
    
    
    $req = $PDO->prepare($sql);
    
    $PDO->query('SET foreign_key_checks = 0');
    //do some stuff here
    
    
    $req->execute(array(
        
        "depart" => $lieudepart,
        
        "arrive" => $lieuarrive,
        
        "idmembre" => $idmembre
        
    ));
    $PDO->query('SET foreign_key_checks = 1');
    var_dump($req);
}
catch(Exception $e)

{
    echo '.$e->getMessage().';
    //     die('Erreur : '.$e->getMessage());
    
}
echo 'Success';
}