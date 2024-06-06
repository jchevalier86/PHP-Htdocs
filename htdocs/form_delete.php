<form action="delete.php" method="get">
    <select name="choix">
<?php
    require_once("test_1.php");
    $req= "SELECT id, prenom, nom FROM utilisateurs;";
    $col= $mysqli -> query($req);
    if ($col -> num_rows > 0) {
        while($lign = $col -> Fetch_object()) {
            echo "<option value='$lign->id'>" .$lign -> prenom .$lign -> nom. "</option>";
        }
    }
?>
    </select>
    <input type="submit" value="Supprimer">
</form>
