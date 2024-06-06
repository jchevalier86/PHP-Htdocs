<?php
    require_once("test_1.php");
    $req= $mysqli->prepare ("SELECT * FROM utilisateurs WHERE id=? LIKE %nom");
    $req -> bind_param("i", $_GET["choix"]);
    $req -> execute();
    $col=$req -> get_result();
    if($col->num_rows > 0){
        $lign=$col->Fetch_object();
    }
?>