function information(){
	var x = document.getElementById("info").value;
	if(x=="Ajouter"){
		document.getElementById("js").innerHTML= 'Message à ajouter: <input name="message"> </input> <br> <button type="submit" name="ajouter" value="validerMessage">Ajouter</button>';
	}
	if(x=="Supprimer"){
		document.getElementById("js").innerHTML= 'id du message à supprimer: <input name="id"> </input> <br> <button type="submit" name="ajouter" value="validerMessage">Supprimer</button>';
	}
	if(x=="Modifier"){
		document.getElementById("js").innerHTML= 'id du message à modifier: <input name="id"> </input> <br>  <br>Nouveau message: <input name="message"> </input>  <br> <button type="submit" name="ajouter" value="validerMessage">Modifier</button>';
	}
}