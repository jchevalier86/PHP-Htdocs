<?php
    require_once("test_1.php");
    if($CONNEXION) {
        echo "Connecté.";
        $mysqli->query("INSERT INTO dwwm VALUES ('', 'Florian','Lecardonnel');");
        if($mysqli->affected_rows > 0) {
            echo "Insertion OK";
        }
    }
?>