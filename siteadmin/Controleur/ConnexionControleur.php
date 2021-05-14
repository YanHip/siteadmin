<?php
include_once '../Modele/ConnexionModele.php';
$login=htmlspecialchars($_POST['login']);
$password=htmlspecialchars($_POST['password']);
$msg= "Votre identifiant ou votre mot de passe est incorrecte. Réessayer";
if(isset($login) && isset($password)){
	if(VerifConnexion($login,$password)==true){
	header('location: ../Vue/Accueil.php');
	}	
	else{
	setcookie("erreurco",$msg,time()+1,"/");
	header('location: ../Vue/ConnexionVue.php');
	}
}

?>