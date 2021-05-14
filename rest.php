<?PHP

	include_once('modele.php');
	$co = mysqli_connect("localhost","snirlla","snirlla","AutorouteV2");
	// Check connection
	if (!$co)
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$req_type=$_SERVER['REQUEST_METHOD'];
	$req_path=$_SERVER['PATH_INFO'];
	$req_data=explode('/',$req_path);
	$header=apache_request_headers();
	if($req_type==='GET'){

		//trouver le message traduit en fonction des lesttres recu
		if($req_data[1]=='find-message'){
			$reqtraduit="SELECT messagetraduit FROM traduction where idLettre='$req_data[2]' AND idmessage=$req_data[3] ";
			$res=ExecuterReq($co,$reqtraduit);
			/*if($header['Accept']==='application/xml')*/$donnees=creerFichierXml($res);
			//if($header['Accept']==='application/json')$donnees=creerFichierJson($res);
			echo $donnees;
		}

		//trouver l'IP d'un afficheur à partir de l'IP caméra à laquelle il est lié
		if($req_data[1]=='find-aff-ip'){
			$reqafficheur="SELECT IpAFficheur FROM afficheur where IpCamera='$req_data[2]'";
			$res=ExecuterReq($co,$reqafficheur);
			$donnees=creerFichierXml($res);
			echo $donnees;
		}

		//trouver l'IP d'une caméra à partir de l'IP afficheur auquel elle est liée
		if($req_data[1]=='find-cam-ip'){
			$reqcam="SELECT IpCamera FROM afficheur where IpAFficheur='$req_data[2]'";
			$res=ExecuterReq($co,$reqcam);
			$donnees=creerFichierXml($res);
			echo $donnees;
		}



		//ajouter un message
		if($req_data[1]=='add-message'){
			$reqajoutmsg="INSERT INTO message(idmessage,message) VALUES ($req_data[2],'$req_data[3]')";
			$res=ExecuterReq($co,$reqajoutmsg);
			if($res){
				echo "Le message a bien été ajouté";
				}
		}

		//supprimer un message
		if($req_data[1]=='delete-message'){
			$reqdeletemsg="DELETE FROM message WHERE idmessage='$req_data[2]'";
			$reqdeletemsg1="SELECT message FROM message WHERE idmessage='$req_data[2]'";
			$res1=mysqli_query($co,$reqdeletemsg1);
			$res=ExecuterReq($co,$reqdeletemsg);
			$resf=mysqli_fetch_assoc($res1);
			if($res){

				echo "Le message n° ".$req_data[2]." contenant: ".$resf['message']." a été supprimé";

			}
		}

		//afficher id message
		if($req_data[1]=='see-idmessage'){
			$reqseeidmsg="SELECT idmessage FROM message WHERE message='$req_data[2]'";
			$res=mysqli_query($co,$reqseeidmsg);
			$res1=mysqli_fetch_assoc($res);
			if($res){
				echo "L'id message est".$res1['idmessage'];
				}
		}

		//ajouter une association afficheur/caméra
		if($req_data[1]=='add-assoc-camera-display'){
			$reqassoc="INSERT INTO afficheur(IpAfficheur,IpCamera,actu_idmessage) VALUES ('$req_data[2]','$req_data[3]',1)";
			$res=ExecuterReq($co,$reqassoc);
			if($res){
				echo "L'association a bien été ajoutée";
				}
		}

		//supprimer une association afficheur/caméra
		if($req_data[1]=='delete-assoc-camera-display'){
			$reqdassoc="DELETE FROM afficheur WHERE IpAfficheur='$req_data[2]' OR IpCamera='$req_data[2]'";
			$res=ExecuterReq($co,$reqdassoc);
			if($res){
				echo "L'association a bien été supprimée";
				}

		}


	}


?>
