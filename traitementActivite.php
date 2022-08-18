<?php
if(isset($_POST["conducteur"], $_POST["lieudepart"], $_POST["lieuarrive"],$_POST["participation"],$_POST["datedepart"], $_POST["datearrive"] )) {

$order_number = NULL;
$conducteur = htmlentities($_POST['conducteur']) ;
$lieudepart = htmlentities($_POST['lieudepart']);
$lieuarrive = htmlentities($_POST['lieuarrive']);
$participation = htmlentities($_POST['participation']);
$datedepart = $_POST['datedepart'];
$datearrive = $_POST['datearrive'];
$idtrajet = '0';
$idmembre = '0';


// $conducteur = 'Moi';
// $lieudepart = 'Paris';
// $lieuarrive = 'Pekin';
// $participation = 500;
// $datedepart = '2022-08-09 09:23:00';
// $datearrive = '2022-09-09 09:23:00';

  try {
    
      
      $PDO = new PDO('mysql:host=localhost;dbname=philippe','root','');
      $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
      $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
 
//     $sql = "INSERT INTO orders (order_number, conducteur, lieudepart, lieuarrive, participation, datedepart, datearrive,idtrajet, idmembre)
// VALUES ('',?,?,?,?,?,?,?,?)";
      $sql = "INSERT INTO orders (order_number, conducteur, lieudepart, lieuarrive, participation, datedepart, datearrive,idtrajet, idmembre)
VALUES (:order_number,:conducteur,:lieudepart,:lieuarrive,:participation,:datedepart,:datearrive,:idtrajet,:idmembre)";
      
      
    $req = $PDO->prepare($sql);
    

    $req->execute(array(
        
        "order_number" => $order_number,
        
        "conducteur" => $conducteur,
        
        "lieudepart" => $lieudepart,
        
        "lieuarrive" => $lieuarrive,
        
        "participation" => $participation,
        
        "datedepart" => $datedepart,
        
        "datearrive" => $datearrive,
        
        "idtrajet" => NULL,
        
        "idmembre" => NULL
        
    ));
    
  }
catch(Exception $e)

{
    echo '.$e->getMessage().';
//     die('Erreur : '.$e->getMessage());
    
}

echo 'Success';
}
