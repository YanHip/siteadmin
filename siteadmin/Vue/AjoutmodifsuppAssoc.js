function information(){
	var x = document.getElementById("info").value;
	if(x=="Ajouter"){
		document.getElementById("js").innerHTML= 'Association à ajouter: <br> Id de l&apos;afficheur <input name="idafficheur"> </input> <br> IP de l&apos;afficheur <input name="ipafficheur"> </input> <br> IP de la caméra <input name="ipcamera"> </input> <br> <button type="submit" name="ajouter" value="validerAssociation">Ajouter</button>';
	}
	if(x=="Modifier"){
		document.getElementById("js").innerHTML= 'Association à modifier: <br> Id de l&apos;afficheur <input name="idafficheur"> </input> <br> IP de l&apos;afficheur <input name="ipafficheur"> </input> <br> IP de la caméra <input name="ipcamera"> </input> <br> <button type="submit" name="ajouter" value="validerAssociation">Modifier</button>';
	}
	if(x=="Supprimer"){
		document.getElementById("js").innerHTML= 'Association à supprimer:<br> id de l&apos;afficheur <input name="idafficheur"> </input> <br> <button type="submit" name="ajouter" value="validerAssociation">Supprimer</button>';
	}
}