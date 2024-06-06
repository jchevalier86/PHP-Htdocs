<?php

require_once("connect.php");

?>

<html>
    <form action='exobase5-2.php' method="get">
        <label for="mot_cle">Mot-clé :</label>
        <input type="text" name="mot_cle" id="mot_cle" placeholder="Entrez le nom ou l'email">
        <br>
        <input type="submit" value="Rechercher">
    </form>
</html>

