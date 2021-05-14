<?php
function recupermsg(){

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
  $req= "SELECT message FROM message ";
  $co->set_charset("utf8");
  $res = $co->query($req);
    if($res->num_rows > 0){
        return $res;
   }
  return 0;
}

function recuperaff(){

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
  $req1 = "SELECT idafficheur FROM afficheur ";
  $co->set_charset("utf8");
  $res1 = $co->query($req1);
     if($res1->num_rows > 0){
        return $res1;
   }
  return 0;
}

function recuperportip($aff){

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
  $req = "SELECT IpAfficheur,port FROM afficheur WHERE idafficheur='".$aff."' ";
  //$co->set_charset("utf8");
  $res = $co->query($req);
     if($res->num_rows > 0){
      $resf=$res->fetch_assoc();
        return $resf;

   }
  return 0;
}

function JournalLumineux($msg,$ip,$port){
$service_port = $port;
$address = $ip;
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$result = socket_connect($socket, $address, $service_port);
socket_write($socket, $msg, strlen($msg));
return true;
}

function PanneauAfficheur($msg,$ip,$port){
$service_port = $port;
$address = $ip;
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$result = socket_connect($socket, $address, $service_port);
socket_write($socket, $msg, strlen($msg));
return true;
}
?>