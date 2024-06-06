<?php
    function estBissextile($annee) {
        //Donnée : Une année est bissextile si elle est divisible par 4 mais pas par 100 sauf si elle est aussi divisible par 400.
        if(($annee % 4 === 0 && $annee % 100 !== 0) || ($annee % 400 === 0)) {
            return true;
        }
        else {
            return false;
        }
    }
?>