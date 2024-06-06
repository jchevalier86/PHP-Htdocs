<table border="1">
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
    </tr>
<?php
    require_once("test_1.php");
    $req="SELECT id, prenom, nom, email FROM utilisateurs;";
    $col= $mysqli -> query($req);
    if ($col -> num_rows > 0) {
        while($lign = $col -> Fetch_object()) {
            echo "<tr><td>" .$lign -> prenom. "</td><td>" .$lign -> nom. "</td><td>" .$lign -> email. "</td></tr>";
        }
    }
    
?>

<?php
    require_once("test_1.php");
    $req = "INSERT INTO utilisateurs (id, prenom, nom, email) VALUES (null, '', '', '');";
        $mysqli->query($req);
        if ($mysqli->affected_rows > 0) {
        echo "Utilisateur ajouté";
        }
        $mysqli -> close();
?>