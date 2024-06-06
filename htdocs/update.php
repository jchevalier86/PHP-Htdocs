<?php
    // Inclusion du fichier "test_1.php" qui contient probablement la connexion à la base de données.
    require_once("test_1.php");

    // Construction de la requête SQL UPDATE avec les valeurs passées via la requête GET.
    // sprintf est utilisé pour formater la chaîne de requête SQL.
    $req = sprintf(
        "UPDATE utilisateurs SET prenom='%s', nom='%s', email='%s' WHERE id='%s';", 
        $_GET["prenom"], $_GET["nom"], $_GET["email"], $_GET["choix"]
    );

    // Exécution de la requête SQL.
    $mysqli->query($req);

    // Vérifie si la requête a affecté des lignes (c'est-à-dire si la mise à jour a réussi).
    if ($mysqli->affected_rows > 0) {
        // Si oui, affiche un message de succès.
        echo "Utilisateur à jour";
    } else {
        // Sinon, affiche un message d'échec.
        echo "Utilisateur non à jour";
    }
?>
