<?php
function recupertslesassocs(){

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
  $req1 = "SELECT * FROM afficheur ";
  $co->set_charset("utf8");
  $res1 = $co->query($req1);
   if($res1->num_rows > 0){
        return $res1;
   }
  return 0;
}
function ajouterassoc($idaff,$ipaff,$ipcam){
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

  $req = "INSERT INTO afficheur(idafficheur,IpAfficheur,IpCamera,actu_idmessage) VALUES ('".$idaff."','".$ipaff."','".$ipcam."',1)";
  $res = $co->query($req);
  if($res)
  {
    return 1;
  }
  return 0;

  //echo $result;
}
function supprimerassoc($id){

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
  $req = "DELETE FROM afficheur WHERE idafficheur='".$id."'";
  $res = $co->query($req);
  if($res)
  {
    return 1;
  }
  return 0;
}
function modifierassoc($id,$IpAfficheur,$IpCamera){

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
  $req = "UPDATE afficheur SET IpCamera='".$IpCamera."' WHERE idafficheur='".$id."'";
  $req1 = "UPDATE afficheur SET IpAfficheur='".$IpAfficheur."'  WHERE idafficheur='".$id."'";
  $res = $co->query($req);
  $res1 = $co->query($req1);
  if($res && $res1)
  {
    return 1;
  }
  return 0;
}
/*AND IpAfficheur='".$IpAfficheur."'*/
?>
