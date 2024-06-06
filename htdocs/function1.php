<?php
    $c = 10;
    function multi ($a, $b) {
        global $c; //affiche 10010
        return $a * $b * $c;
    }
    echo multi(5, 2);
    echo $c;
?>