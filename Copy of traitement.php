<?php session_start();
// setcookie("email",$email, time() + 365*24*3600,'/','localhost',false,true);
// setcookie("token",$token, time() + 365*24*3600,'/','localhost',false,true);

// $pass = NULL;
//     $_SESSION['password'] = $password;
    $_SESSION['logged'] = 'connecte';
    
    $email = htmlspecialchars( $_POST['email']) ;
    $password = htmlspecialchars( $_POST['password']);
    
    $pdo = new PDO('mysql:host=localhost;dbname=philippe','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    
    $sql = "SELECT * FROM membre WHERE email=:email";
    
    $request= $pdo->prepare($sql);
    
    $response = $request->prepare(array('email' => $email));
    if(response){
        
                 if (isset($_POST["rememberme"]))
                {

                    
                    setcookie("email",$email, time() + 365*24*3600,'/','localhost',false,true);
                    setcookie("token",$token, time() + 365*24*3600,'/','localhost',false,true);
                    
                    
                    print_r($_COOKIE);
                    
                }
          


        if ($email == 'lhpp.philippe@gmail.com') {
     
        $_SESSION['logged']='admin';
        header('Location: indexdate.php') ;
        } else {
          $_SESSION['logged']='bienvenue';
          header('Location: CoorAdresse.php');
        }
      }
    
?>    
