<?php session_start();
// setcookie("email",$email, time() + 365*24*3600,'/','localhost',false,true);
// setcookie("token",$token, time() + 365*24*3600,'/','localhost',false,true);


$email = htmlspecialchars( $_POST['email']) ;
$password = htmlspecialchars( $_POST['password']);
  
        
    
    $_SESSION['password'] = $password;
    $_SESSION['logged'] = 'connecte';
            
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'philippe');

   
    
   //On cr�� la requ�te
//    $req="SELECT login, password FROM jeux_video WHERE login =.'.$var.'. AND password =.'.$password.'";

    $sql = "SELECT email, token, password FROM membre WHERE email = '".$email."'";
    
//     $sql = "SELECT email. token FROM membre WHERE email = '".$email."'";
    /* Requ�te "Select" retourne un jeu de r�sultats */

    
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
//       $token = $data['token'];
      
      if (password_verify($password , $pass)) {
//       $_SESSION['email'] = $email;
        
//              {
                 if (isset($_POST["rememberme"]))
                {

                    
                    setcookie("email",$email, time() + 365*24*3600,'/','localhost',false,true);
                    setcookie("token",$token, time() + 365*24*3600,'/','localhost',false,true);
                    
                    
                    print_r($_COOKIE);
                    
                }
          

//             }
            if ($email == 'lhpp.philippe@gmail.com') {
            mysqli_close($mysqli);
            
            $result->close();
            
            $_SESSION['logged']='admin';
             header('Location: indexdate.php') ;
      } else {
          $_SESSION['logged']='bienvenue';
          header('Location: CoorAdresse.php');};
      
      
  }

  }
  
?>    
