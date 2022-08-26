<?php
// lieudepart: lieudepart,
// lieuarrive: lieuarrive,
// participation: participation,
// datedepart: datedepart,
// datearrive: datearrive
if (isset($_POST['lieudepart'],$_POST['lieuarrive']))
{
$lieudepart = htmlentities($_POST['lieudepart']);
$lieuarrive = htmlentities($_POST['lieuarrive']);
if (isset( $_SESSION['idmembre'])) {
$idmembre = $_SESSION['idmembre']; }


try {
    
    
    $PDO = new PDO('mysql:host=localhost;dbname=philippe','root','');
    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    
    $sql = "INSERT INTO trajet (id, lieudepart, lieuarrive, idmembre)
VALUES (:lieudepart,:lieuarrive,:idmembre)";
    
    
    $req = $PDO->prepare($sql);
    
    $PDO->query('SET foreign_key_checks = 0');
    //do some stuff here
    
    
    $req->execute(array(
        
        "lieudepart" => $lieudepart,
        
        "lieuarrive" => $lieuarrive,
        
        "idmembre" => $idmembre
        
    ));
    $PDO->query('SET foreign_key_checks = 1');
    
}
catch(Exception $e)

{
    echo '.$e->getMessage().';
    //     die('Erreur : '.$e->getMessage());
    
}
echo }