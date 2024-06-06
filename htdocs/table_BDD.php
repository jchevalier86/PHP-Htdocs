<table style="border: 1px solid black;">
    <tr>
        <th>ID</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Supprimer</th>
    </tr>
<?php
    require_once("test_1.php");
    $req = "SELECT id, prenom, nom, email FROM utilisateurs";
    $col = $mysqli -> query($req);
    if ($col -> num_rows > 0) {
        while ($lign = $col -> Fetch_object()) {
            echo "<tr><td>" .$lign -> id. "</td>";
            echo "<td>" .$lign -> prenom. "</td>";
            echo "<td>" .$lign -> nom. "</td>";
            echo "<td>" .$lign -> email. "</td>";
            echo "<td><a href='form_delete.php?choix=".$lign->id."'>Supprimer</a></td></tr>";
        }
    }
?>
</table>