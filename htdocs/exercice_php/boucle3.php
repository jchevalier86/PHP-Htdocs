<?php
$tableau=["a", "b", "c", "d", "e", "f", "g"];
$lettre = $_GET["lettre"];
$i = 0;
while (($lettre !== $tableau[$i]) && ($i < count(lettre))) {
    if($i == count($tableau)) {
        echo $tableau;
    }
    else {
        echo "Non trouvé";
    }
    $i++;
}
?>
