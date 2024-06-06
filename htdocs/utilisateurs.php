<?php
    // Inclusion du fichier "test.php" qui contient la connexion à la base de données.
    require_once("test_1.php");

    // Récupération des paramètres passés via la requête GET.
    $prenom = $_GET["prenom"];
    $nom = $_GET["nom"];
    $email = $_GET["email"];
    $annee_naissance = $_GET["année"];
    $ville = $_GET["ville"];

    // Construction de la requête SQL INSERT pour ajouter un nouvel utilisateur dans la table "utilisateurs".
    // Les valeurs sont directement insérées dans la requête.
    $req = "INSERT INTO utilisateurs (id, prenom, nom, email, annee_naissance, ville) VALUES (null, '$prenom', '$nom', '$email', '$annee_naissance', '$ville');";

    // Exécution de la requête.
    $mysqli->query($req);

    // Vérifie si la requête a affecté des lignes (c'est-à-dire si l'insertion a réussi).
    if($mysqli->affected_rows > 0) {
        // Si oui, affiche un message de succès.
        echo "Utilisateur créé";
    }
?>
