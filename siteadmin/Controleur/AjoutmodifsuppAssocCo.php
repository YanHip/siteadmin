<?php
include_once '../Modele/AjoutmodifsuppAssocMo.php';
$listeMsg=recupertslesassocs();
if($listeMsg){
  $tabMessage="<table style='text-align: center;'>
      <tr> <th> id de l'afficheur </td> <th> ip afficheur </td> <th> ip camera </td> <th> id du message actuel </td> </tr>";
   while($tab=$listeMsg->fetch_assoc()){
       $tabMessage.="<tr> <td>".$tab['idafficheur']." </td> <td>".$tab['IpAfficheur']." </td> <td>".$tab['IpCamera']." </td> <td>".$tab['actu_idmessage']." </td> </tr>";
      } 
       $tabMessage.="   </table>";
} 
else{
  echo "Une erreur est survenue";
}

if(isset($_POST['ajoutsupprimer']) && isset($_POST['idafficheur']) && isset($_POST['ipafficheur'])&&  isset($_POST['ipcamera']))
{
  if($_POST['ajoutsupprimer']=="Ajouter"){
  $id=htmlspecialchars($_POST['idafficheur']);
  $IpAfficheur=htmlspecialchars($_POST['ipafficheur']);
  $IpCamera=htmlspecialchars($_POST['ipcamera']);
  ajouterassoc($id,$IpAfficheur,$IpCamera);
  if(isset($IpAfficheur)) header('location:../Vue/AjoutmodifsuppAssoc.php');
  }
}

if(isset($_POST['ajoutsupprimer']) && isset($_POST['idafficheur']))
{
  if($_POST['ajoutsupprimer']=="Supprimer"){
  $id=htmlspecialchars($_POST['idafficheur']);
  supprimerassoc($id);
  if(isset($id))header('location:../Vue/AjoutmodifsuppAssoc.php');
  }
} 

if(isset($_POST['ajoutsupprimer']) && isset($_POST['idafficheur']) && isset($_POST['ipafficheur'])&&  isset($_POST['ipcamera'])){
  if($_POST['ajoutsupprimer']=="Modifier"){
  $id=htmlspecialchars($_POST['idafficheur']);
  $IpAfficheur=htmlspecialchars($_POST['ipafficheur']);
  $IpCamera=htmlspecialchars($_POST['ipcamera']);
  $ajouter=$_POST['ajouter'];

  modifierassoc($id,$IpAfficheur,$IpCamera);
  if(isset($ajouter))header('location:../Vue/AjoutmodifsuppAssoc.php');
  }
}
?>
