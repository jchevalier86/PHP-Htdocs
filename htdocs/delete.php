<?php
    require_once("test_1.php");
    $req="DELETE FROM utilisateurs WHERE id='".$_GET['choix']."';";
    $mysqli -> query($req);
    if ($mysqli -> affected_rows > 0) {
            echo "Utilisateur supprimé";
        }
?>