<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
if (isset($_POST['depart'], $_POST['arrive']))
{
$depart = htmlentities($_POST['depart']);
$arrive = htmlentities($_POST['arrive']);


    
    
    $PDO = new PDO('mysql:host=localhost;dbname=philippe','root','');
    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    
    $sql = "INSERT INTO trajet (depart, arrive) VALUES (:depart,:arrive)";
    
    try {
        
    $req = $PDO->prepare($sql);
    
    $PDO->query('SET foreign_key_checks = 0');
    //do some stuff here
    
    
    $req->execute(array(
        
      
        "depart" => $depart,
        
        "arrive" => $arrive
        
        
    ));
    $PDO->query('SET foreign_key_checks = 1');
}
catch(PDOException $e){//Notez PDOException et pas seulement Exception
    die("Erreur d'insertion :".$e->getMessage());
}
}
if(isset($_POST["depart"], $_POST["arrive"],$_POST["participation"],$_POST["datedepart"], $_POST["datearrive"] )) 
{
    
    // $order_number = NULL;
//     $conducteur = htmlentities($_POST['conducteur']);
//     $conducteur = "Anata";
    $lieudepart = htmlentities($_POST['depart']);
    $lieuarrive = htmlentities($_POST['arrive']);
    $participation = htmlentities($_POST['participation']);
    $datedepart = $_POST['datedepart'];
    $datearrive = $_POST['datearrive'];
    
    
        
        
        $PDO = new PDO('mysql:host=localhost;dbname=philippe','root','');
        $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
      
        try {
            
            $req = $PDO->prepare($sql);
            
            $PDO->query('SET foreign_key_checks = 0');
            //do some stuff here
        
        $sql = "INSERT INTO orders (conducteur, lieudepart, lieuarrive, participation, datedepart, datearrive)
VALUES (:conducteur,:lieudepart,:lieuarrive,:participation,:datedepart,:datearrive)";
        
        
        $req = $PDO->prepare($sql);
        
        $PDO->query('SET foreign_key_checks = 0');
        //do some stuff here
        
        
        $req->execute(array(
            
            "conducteur" => "anatta",
            
            "lieudepart" => $lieudepart,
            
            "lieuarrive" => $lieuarrive,
            
            "participation" => $participation,
            
            "datedepart" => $datedepart,
            
            "datearrive" => $datearrive
            
        ));
        $PDO->query('SET foreign_key_checks = 1');
        
        }
        catch(PDOException $e){//Notez PDOException et pas seulement Exception
            die("Erreur d'insertion :".$e->getMessage());
        }

}