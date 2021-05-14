<?php
include_once '../Controleur/AjoutmodifsuppAssocCo.php';
	
?>
<html>
	<head>
		<title> Administration-Panneau Autoroutier </title>
   		<link rel="stylesheet" href="./AjoutmodifsuppAssoc.css" type="text/css" />
   		 <script type="text/javascript" src="./AjoutmodifsuppAssoc.js"></script>
    	<meta charset="utf-8">
	</head>
	<header>
		<h2 align="center" id="title"> Ajouter, supprimer ou modifier des associations entre afficheur et caméra </h2>
	</header>
	<div id="tout">
		<section>
		<form action="../Controleur/AjoutmodifsuppAssocCo.php" method="post">
			<select id="info" name="ajoutsupprimer" onchange="information()">
				<option value="Ajouter">Ajouter une association </option>
				<option value="Supprimer"> Supprimer une association</option>
				<option value="Modifier"> Modifier une association</option>

			</select>
			<!-- AJOUTER UN BOUTON RETOUR -->
			<br>
			<p id="js">	Association à ajouter: <br> 
				Id de l&apos;afficheur <input name="idafficheur"> </input> <br>  <br> 
				IP de l&apos;afficheur <input name="ipafficheur"> </input> <br>  <br> 
				IP de la caméra <input name="ipcamera"> </input> <br>  <br> 
				<button type="submit" name="ajouter" value="validerAssociation">Ajouter</button>
			</p>
		</form>


	</section>
	<aside>
		Voici les associations déjà présentes dans la base de donnée:<br> <br>
		<?php echo $tabMessage; ?>

	</aside>
</div>
	<footer>
	<a href="javascript:history.go(-1)">Retour</a> 
	</footer>
</html>