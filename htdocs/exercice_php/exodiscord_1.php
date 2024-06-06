<?php
    echo "Exo 1";
    echo "<br>";
    echo "Les variables qui sont valides sont : Sa, S_a, Sa_a, SAAA et Sa1";
    echo "<br>";
?>

<?php
    $note_maths = 15; 
    $note_francais = 12; 
    $note_histoire_geo = 9;
    $moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
    echo "Exo 2";
    echo "<br>";
    echo 'La moyenne est de '. "$moyenne" .' / 20.';
    echo "<br>";
?>

<?php
    $test = "42";
    echo "Exo 3";
    echo "<br>";
    var_dump($test);
    echo "<br>";
?>

<?php
    echo "Exo 4";
    echo "<br>";
    $sexe = "homme";
        if ($sexe === "homme") {
            echo "Bonjour Monsieur";
        }
        elseif ($sexe === "femme") {
            echo "Bonjour Madame";
        }
        else {
            echo "Bonjour";
        }
        echo "<br>";
?>

<?php
    echo "Exo 5";
    echo "<br>";
    $dep = 77000;
    while ($dep < 78000) {
        echo $dep++;
        echo "<br>";
    }

    for ($i = 1; $i <= 10; $i++) {
        echo $i*5;
        echo "<br>";
    }

    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
        echo $i;
        }
        echo "<br>";
    }
?>

<?php
    $n = "*";
    for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo $n;
        }
        echo "<br>";
    }
?>
