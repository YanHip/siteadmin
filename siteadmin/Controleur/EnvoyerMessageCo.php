<?php
include_once '../Modele/EnvoyerMessageMo.php';


$listeaff=recuperaff();
if($listeaff){
  $tabaff="<select name='aff'>";
      while($tab=$listeaff->fetch_assoc()){
       $tabaff.="<option value='".$tab['idafficheur']."'>".$tab['idafficheur']."</option>";
      } 
       $tabaff.="   </select>";
} 
else{
  echo "Une erreur est survenue";
}

$listemsg=recupermsg();
if($listemsg){
  $tabmsg="<select name='msg'>";
      while($tab1=$listemsg->fetch_assoc()){
       $tabmsg.="<option value='".$tab1['message']."'>".$tab1['message']."</option>";
      } 
       $tabmsg.="   </select>";
} 
else{
  echo "Une erreur est survenue";
}
if(isset($_POST['aff']) && isset($_POST['msg'])){
$aff=$_POST['aff'];
$msg=$_POST['msg'];
$portip=recuperportip($aff);
$ip=$portip['IpAfficheur'];
$port=$portip['port'];
if($aff=="1"){
  if(PanneauAfficheur($msg,$ip,$port)==true){
   header('location: ../Vue/EnvoyerMessageVue.php');
 }
}
if($aff=="3"){
	if(PanneauAfficheur($msg,$ip,$port)==true){
    header('location: ../Vue/EnvoyerMessageVue.php');
  }
}
}

?>