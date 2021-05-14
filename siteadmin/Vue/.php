<?php

$servername = "localhost";
$username = "snirlla";
$pswd = "snirlla";
$dbname = "autoroute";
// Create connection
$co = new mysqli($servername, $username, $pswd,$dbname);

// Check connection
if ($co->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
  $req1 = "SELECT * FROM message ";
  $res1 = $co->query($req1);
  if($res1->num_rows > 0){
   /*session_start();*/
   while($tab=$res1->fetch_assoc()){
   echo $tab['idmessage']." ". $tab['message'];
     /*$_SESSION['lmessage']= $tab['message'];*/
      
   }
   return 1;
  }
  return 0;


?>