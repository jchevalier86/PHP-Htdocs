<?php
    function multi ($a, $b) {
        $c = 10;
        return $a * $b * $c;
    }
    echo multi(5, 2);
    echo $c; //affiche 100 et une erreur
?>