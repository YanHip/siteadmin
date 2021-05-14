<?php
// Start the session
session_start();
?>
<html>
	<head>
		<title> Administration-Panneau Autoroutier </title>
   		<link rel="stylesheet" href="./Accueil.css" type="text/css" />
    	<meta charset="utf-8">
	</head>

	<body>
		 <header>
		 <h2 align="center" id="title">Administration des Panneaux Autoroutiers de Nogent-sur-Marne </h2> 
		</header>
		<nav>


			 <strong>Bienvenue <?php echo $_SESSION['nom'] ?> </strong>   
			<a id="deco" href="../Controleur/DeconnexionMo.php" > Log out	</a></br></br>
			<span id="selection">
			<a href="./AjoutmodifsuppmsgVue.php"> Ajouter/supprimer des messages </a>
			</span>
			<span id="selection">
			<a href="./AjoutmodifsuppAssoc.php"> Ajouter/supprimer des associations afficheur/caméra </a>
			</span>
			<span id="selection">
			<a href="./EnvoyerMessageVue.php"> Envoyer un message sur l'afficheur </a>
			</span>
		</nav>
		<section>
			<h2> </h2>
			<p></p>
		</section>
		<footer>
			<h3></h3>
			<p></p>
		</footer>
        <aside>
			<h3></h3>
			<p></p>
		</aside>
		  
	</body>
</html>
