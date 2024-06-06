<form action="form_update.php" method="get">
    <select name="choix">
<?php
    require_once("test_1.php");
    $req= "SELECT id, prenom, nom FROM utilisateurs;";
    $col= $mysqli -> query($req);
    if ($col -> num_rows > 0) {
        while($lign = $col -> Fetch_object()) {
            echo sprintf ("<option value='%s'>%s %s</option>",$lign -> id, $lign -> prenom, $lign -> nom);
        }
    }
?>
    </select>
    <input type="submit" value="Mettre à jour">
</form>