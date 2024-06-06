<?php
/*ini_set('display_errors', 1);*/
$SERVEUR="localhost";							//Nom du serveur
$LOGIN="root";									//Nom d'utilisateur
$MDP="";										//Mot de passe
$MABASE="test";			//Nom de la base
$mysqli = new mysqli($SERVEUR,$LOGIN,$MDP,$MABASE);
if($mysqli->connect_errno) {
	exit("Echec lors de la connexion à MySQL : " . $mysqli->connect_error);
	$CONNEXION=false;
}
else {
	$CONNEXION=true;
	/*$req="SELECT * FROM table WHERE 1;";
	$curs = $mysqli -> query($req);
	if($curs -> num_rows > 0) {
		while($tuple = $curs -> fetch_object()) {
			//On traite les enregistrements
			//Si on insert, update ou delete : if($mysqli->affected_rows > 0)
		}
	}*/
}
?>