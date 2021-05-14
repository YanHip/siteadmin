<?php
 // Start the session
//header("Content-Type: text/html;charset=UTF-8");
include_once '../Controleur/AjoutmodifsuppmsgCo.php';
	
?>

<html>
	<head>
		<title> Administration-Panneau Autoroutier </title>
   		<link rel="stylesheet" href="./AjoutmodifsuppAssoc.css" type="text/css" />
   		<script type="text/javascript" src="./AjoutmodifsuppmsgVue.js"></script>
    	<meta charset="utf-8">
	</head>
	<header>
		<h2 align="center" id="title"> Ajouter, supprimer ou modifier des messages </h2>
	</header>
		<section>
		<form action="../Controleur/AjoutmodifsuppmsgCo.php" method="post">
			<select id="info" name="ajoutsupprimer" onchange="information()">
				<option value="Ajouter">Ajouter un message </option>
				<option value="Supprimer"> Supprimer un message</option>
				<option value="Modifier"> Modifier un message</option>

			</select>
			<br>
			<p id="js">	Message à ajouter: <input name='message'> </input> <br>  <br> 
				<button type="submit" name="ajouter" value="validerMessage">Ajouter</button>
			</p>
		</form>


	</section>
	<aside>
		Voici les messages déjà présent dans la base de donnée:<br> <br>
		<?php echo $tabMessage; ?>
	</aside>
	<footer> 
		<a href="javascript:history.go(-1)">Retour</a>
	</footer>
</html>