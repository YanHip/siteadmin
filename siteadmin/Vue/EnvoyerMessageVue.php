<?php
include_once '../Controleur/EnvoyerMessageCo.php'
?>
<html>
	<head>
		<title> Administration-Panneau Autoroutier </title>
   		<link rel="stylesheet" href="./EnvoyerMessage.css" type="text/css" />
   		<!--<script type="text/javascript" src="./AjoutmodifsuppmsgVue.js"></script> -->
    	<meta charset="utf-8">
	</head>
		<section>
		<form action="../Controleur/EnvoyerMessageCo.php" method="post">
			Sélectionner l'afficheur: <?php echo $tabaff ?>
			<br>
			Sélectionner le message: <?php echo $tabmsg ?>
				<button type="submit" name="ajouter" value="validerMessage">Envoyer</button>
			</p>
		</form>


	</section>
	<aside>
	</aside>
	<footer> 
		<a href="javascript:history.go(-1)">Retour</a>
	</footer>
</html>