<?php
//header("Content-Type: text/html;charset=UTF-8");
function ajoutermessage($message){
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


  $req = "INSERT INTO message(message) VALUES ('".$message."')";
  $res = $co->query($req);
  if($res)
  {
    return 1;
  }
  return 0;

  //echo $result;
}

function recupertslesmsg(){

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
  $req1 = "SELECT * FROM message ";
  $co->set_charset("utf8");
  $res1 = $co->query($req1);
   if($res1->num_rows > 0){
     //session_start();
   //while($tab=$res1->fetch_assoc())
       return $res1;
   }
  return 0;

  //echo $result;
}

function supprimermsg($id){

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
  $req = "DELETE FROM message WHERE idmessage='".$id."'";
  $res = $co->query($req);
  if($res)
  {
    return 1;
  }
  return 0;
}
function modifiermsg($msg,$id){

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
  $req = "UPDATE message SET message='".$msg."' WHERE idmessage='".$id."'";
  $res = $co->query($req);
  if($res)
  {
    return 1;
  }
  return 0;
}

?>