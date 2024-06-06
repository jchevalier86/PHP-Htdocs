<?php
    function codePostal ($code, ($qte = 100)) {
        $res = "";
        $debut = $code*1000; //86000
        $fin = $debut+$qte; //87000
        for ($i = $debut; $i <= $fin; $i++){
            $res = $res.$i. "<br>"; //$res.=$i. "<br>";
        }
        return$res;
    }
     echo codePostal(86, 10);
?>