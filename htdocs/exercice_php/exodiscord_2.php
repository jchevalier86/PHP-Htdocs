<?php
    echo "Exo 1";
    echo "<br><br>";
    $temperature = 20;
    if ($temperature < 25) {
        echo "La température est agréable.";
    }
    else {
        echo "Il fait chaud !";
    }
?>

<?php
    echo "<br><br>";
    echo "Exo 2";
    echo "<br><br>";
    for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        echo "Le nombre est pair : $i". "<br>";
    }
    else {
        echo "Le nombre est impair : $i". "<br>" ;
    }
    }
?>

<?php
    echo "<br><br>";
    echo "Exo 3";
    echo "<br><br>";
    $fruits = ["pomme", "banane", "orange", "fraise", "kiwi"];
    for ($i = 0; $i <= count($fruits); $i++) {
        echo "$fruits[$i]". "<br>";
    }
?>

<?php
    echo "Exo 4";
    echo "<br><br>";
    function calculerSurfaceRectangle ($L, $l) {
        return $L * $l;
    }
    echo calculerSurfaceRectangle(15, 10);
?>

<?php
    echo "<br><br>";
    echo "Exo 5";
    echo "<br><br>";
    $phrase = "Bonjour le monde !";
    echo strlen($phrase);
    echo "<br>";
    echo strtoupper($phrase);
    echo "<br>";
    echo str_replace("monde", "PHP", $phrase);
?>