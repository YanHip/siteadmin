
<html>

<head>
<title> Administration-Panneau Autoroutier </title>
   <link rel="stylesheet" href="./Connexion.css" type="text/css" />
   <script type="text/javascript" src="./ConnexionVue.js"></script>
    <meta charset="utf-8">
</head>

<body>
	<div id="entete">
		<label> <h1> Site de gestion des panneaux autoroutiers et de la base de donnée </h1> </label>
	</div>
  <div id="forme">
    <form action="../Controleur/ConnexionControleur.php" method="post">
      <label id="log"> Identifiant : </label> <input id="log" type="text" name="login" /> <br>
      <label id="mdp"> Mot de passe : </label> <input id="mdp" type="password" name="password"/> <br>
      <button type="submit" name="submit"> Connexion</button> 
    </form> <br>
   <strong id="err">  <?php if(isset($_COOKIE["erreurco"])) echo $_COOKIE["erreurco"]; ?> </strong>
  </div>
</body>
</html>
