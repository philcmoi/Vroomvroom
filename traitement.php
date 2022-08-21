<?php session_start();
// setcookie("email",$email, time() + 365*24*3600,'/','localhost',false,true);
// setcookie("token",$token, time() + 365*24*3600,'/','localhost',false,true);


$email = htmlspecialchars( $_POST['email']) ;
$password = htmlspecialchars( $_POST['password']);
  
        
    
//     $_SESSION['password'] = $password;
//     $_SESSION['logged'] = ' admin';
            
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'philippe');

   
    
   //On créé la requête
//    $req="SELECT login, password FROM jeux_video WHERE login =.'.$var.'. AND password =.'.$password.'";

    $sql = "SELECT email, token, password FROM membre WHERE email = '".$email."'";
    
//     $sql = "SELECT email. token FROM membre WHERE email = '".$email."'";
    /* Requête "Select" retourne un jeu de résultats */

    
   if (!$result = $mysqli->query($sql)) {
      
        header('Location: index.php?error=1');
// var_dump($result);
//       echo " Donnees incorrectes ";
   }

   if ($result->num_rows === 0) {
      
       header('Location: index.php?error=1');
//        var_dump($result);
       
//       echo " Donnees incorrectes ";
   }
        
  if ($data = mysqli_fetch_array($result))
  {
      $pass = $data['password'];
      $token = $data['token'];
      $mail = $data['email'];
      var_dump($pass);
      if (password_verify($password , $pass) && $mail=='lhpp.philippe@gmail.com' ) {
//       $_SESSION['email'] = $email;
      $_SESSION['logged']='admin';
             {
                 if (isset($_POST["rememberme"]))
                {

                    
                    setcookie("email",$email, time() + 365*24*3600,'/','localhost',false,true);
                    setcookie("token",$token, time() + 365*24*3600,'/','localhost',false,true);
                    
                    
                    print_r($_COOKIE);
                    
                }
          

            }
            mysqli_close($mysqli);
            
            $result->close();
             header('Location: indexdate.php') ;
          } 
          else {
          header('Location: index.php?error=1');};
  }


  
?>    
