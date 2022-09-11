<?php

if (isset($_POST['depart'], $_POST['arrive']))
{
$depart = htmlentities($_POST['depart']);
$arrive = htmlentities($_POST['arrive']);

try {
    
    
    $PDO = new PDO('mysql:host=localhost;dbname=philippe','root','');
    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    
    $sql = "INSERT INTO trajet (depart, arrive) VALUES (:depart,:arrive)";
    
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