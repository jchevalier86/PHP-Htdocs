<?php
    const n = 130;
    const x = 150;

    if (n < x){
        echo x;
    }
    else {
        echo n;
    }
    echo "<br>";
    echo n + x;
    echo "<br>";
    echo x * n;
    echo "<br>";
    if (x !== 0) {
        echo n / x;
    }
    else {
        echo "Code erreur";
    }
    echo "<br>";
    if (n !== 0) {
        echo x / n;
    }
    else {
        echo "Code erreur";
    }
?>