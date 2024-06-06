<form action="boucle1.php" method="GET">
    <input type="text" name="email">   
    <input type="submit" value="Envoyer"/> 
</form>

<?php
    $email = $_GET["email"];
    $len = strlen($email);
    $posA = strpos("$email", "@");
    $posB = strpos("$email", ".");
        if ($posA === false || $posB === false) {
            echo "Adresse e-mail non valide";
        }
        elseif ($posA < $posB) {
            echo "Adresse e-mail valide";
        }
?>
    