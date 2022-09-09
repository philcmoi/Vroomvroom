<?php

if (isset($_POST['departV'], $_POST['arriveV']))
{
$depart = htmlentities($_POST['departV']);
$arrive = htmlentities($_POST['arriveV']);
// var_dump($_SESSION['idmembre']);
// $lieudepart = htmlentities('Paris');
// $lieuarrive = htmlentities('Pekin');
// if (isset( $_SESSION['idmembre'])) {
// $idmembre = $_SESSION['idmembre']; }
// var_dump($idmembre);
// $idmembre = 500;

try {
    
    
    $PDO = new PDO('mysql:host=localhost;dbname=philippe','root','');
    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    
//     INSERT INTO `trajet` (`idtrajet`, `depart`, `arrive`, `idmembre`) VALUES (NULL, 'Paris', 'Shangail', '26');
    
//     $sql = "INSERT INTO trajet (idtrajet,depart, arrive, idmembre)
// VALUES (:idtrajet,:depart,:arrive,:idmembre)";
    
    
    $sql = "INSERT INTO trajet (depart, arrive)
VALUES (:depart,:arrive)";
    
    $req = $PDO->prepare($sql);
    
    $PDO->query('SET foreign_key_checks = 0');
    //do some stuff here
    
    
    $req->execute(array(
        
//         "idtrajet" =>NULL,
        
        "depart" => $depart,
        
        "arrive" => $arrive
        
//         "idmembre" => NULL
        
    ));
    $PDO->query('SET foreign_key_checks = 1');
//     var_dump($req);
}
catch(Exception $e)

{
    echo '.$e->getMessage().';
//         die('Erreur : '.$e->getMessage());
    
}
echo 'Success';
// echo 'Echec';
}