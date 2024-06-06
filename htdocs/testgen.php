<?php
	header('Content-Type: application/json; charset=utf-8');
	//Utilisation : testgen.php?table=<table>[&champs=champ1, champ2][&filtre=champ1 LIKE 'valeur']
	function genRequete($table, $champs = "*", $filtre = ""){
		$req="SELECT ".$champs." FROM ".$table;
		if($filtre!==""){
			$req .= " WHERE ".$filtre;
		}
		$req.=";";
		return $req;
	}
	
	require_once("test_1.php");
	if(isset($_GET["champs"])){
		if(isset($_GET["filtre"])){
			$req=genRequete(@$_GET["table"],@$_GET["champs"],@$_GET["filtre"]);
		}
		else {
			$req=genRequete($_GET["table"],$_GET["champs"]);
		}
	}
	else {
		if(isset($_GET["filtre"])){
			$req=genRequete($_GET["table"],"*",$_GET["filtre"]);
		}
		else {
			$req=genRequete($_GET["table"]);
		}
	}
	//echo $req;
	$req=$mysqli->prepare($req);
	$req->execute();
	$curs=$req->get_result();
	$res=[];
	if($curs->num_rows > 0){
		while($tuple=$curs->fetch_object()){
			array_push($res,$tuple);
		}
	}
	echo json_encode($res);
?>