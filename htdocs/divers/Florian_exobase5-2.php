<?php

require_once("connect.php");

if(isset($_GET["mot_cle"]) && !empty($_GET["mot_cle"])) {
    $mot_cle = '%' . $mysqli->real_escape_string($_GET["mot_cle"]) . '%';
    $req = $mysqli->prepare("SELECT * FROM utilisateurs WHERE nom LIKE ? OR email LIKE ?");
    $req->bind_param("ss", $mot_cle, $mot_cle);
    $req->execute();
    $result = $req->get_result();
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Nom : " . $row['nom'] . ", Email : " . $row['email'] . "";
        }
    } else {
        echo "Aucun résultat trouvé pour '$mot_cle'.";
    }
} else {
    echo "Veuillez entrer un mot-clé pour effectuer la recherche.";
}
?>

