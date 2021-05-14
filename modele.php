
<?PHP
	function ExecuterReq($co,$req){
		$res=mysqli_query($co,$req)or die("La requête ne peut être executer:".mysqli_error($co));
		return $res;
	}

	function creerFichierXml($data){
		$Xml="<xml version='1.0' encoding='UTF-8>";
		while($rep=mysqli_fetch_assoc($data)){
			foreach($rep as $c=>$v){
				$Xml.="<$c>$v</$c>";
			}
		}
		$Xml.="</xml>";
		return $Xml;
	}

	function creerFichierJson($data){
		$Json="{";
		while($rep=mysqli_fetch_assoc($data)){
		foreach($rep as $c=>$v){
			$Json.="'$c':'$v',";
		}
		}
		$Json.="}";
		return $Json;
	}


?>
