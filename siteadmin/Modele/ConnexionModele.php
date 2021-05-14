<?php
function VerifConnexion($login, $password){
 //include_once('location: /var/www/html/siteadmin/Controleur/VerifCo.php');
 $servername = "localhost";
 $username = "snirlla";
 $pswd = "snirlla";
 $dbname = "AutorouteV2";
  // Create connection
  $co = new mysqli($servername, $username, $pswd,$dbname);

  // Check connection
  if ($co->connect_error)
  {
      die("Connection failed: " . $conn->connect_error);
  }

  $req = 'SELECT * FROM users where login="'.$login.'" AND password="'.$password.'"';
  $res = $co->query($req);
  //$result = $res->num_rows ;
  if( $res->num_rows > 0)
  {
    while($row = $res->fetch_assoc())
    {
      $nom=$row['nom'];
    }
    session_start();
    $_SESSION['login']=$login;
    $_SESSION['password']=$password;
    $_SESSION['nom']=$nom;
    return 1;
  }

  return 0;

  //echo $result;
}

 ?>
