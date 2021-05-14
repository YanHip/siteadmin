<?php
//header("Content-Type: text/html;charset=UTF-8");
include_once '../Modele/AjoutmodifsuppmsgMo.php';
//$ajousupp=$_POST['ajoutsupp'];
//$id=htmlspecialchars($_POST['id']);
$listeMsg=recupertslesmsg();
if($listeMsg){
  $tabMessage="<table style='text-align: center;'>
      <tr> <th> id du message </td> <th> message </td> </tr>";
   while($tab=$listeMsg->fetch_assoc()){
      //echo $tab['idmessage'];
       $tabMessage.="<tr> <td>".$tab['idmessage']." </td> <td>".$tab['message']." </td> </tr>";
      } 
       $tabMessage.="   </table>";
  //header('location: ../Vue/ajoutsuppmessage.php');

      // include_once'../Vue/ajoutsuppmessage.php';
 } 
else{
 return 0;
}
if(isset($_POST['ajoutsupprimer']) && isset($_POST['message'])){
  if($_POST['ajoutsupprimer']=="Ajouter"){
  $message=htmlspecialchars($_POST['message']);
  ajoutermessage($message);
  if(isset($message)) header('location:../Vue/AjoutmodifsuppmsgVue.php');
  }
}

if(isset($_POST['ajoutsupprimer']) && isset($_POST['id'])){
  if($_POST['ajoutsupprimer']=="Supprimer"){
  $id=htmlspecialchars($_POST['id']);
  supprimermsg($id);
  if(isset($id))header('location:../Vue/AjoutmodifsuppmsgVue.php');
  }
} 

if(isset($_POST['ajoutsupprimer']) && isset($_POST['message']) && isset($_POST['id'])){
  if($_POST['ajoutsupprimer']=="Modifier"){
  $id=htmlspecialchars($_POST['id']);
  $msg=htmlspecialchars($_POST['message']);
  modifiermsg($msg,$id);
  if(isset($id) && isset($msg))header('location:../Vue/AjoutmodifsuppmsgVue.php');
  }
}

?>