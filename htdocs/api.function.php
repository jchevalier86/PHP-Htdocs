<form method="get" action="api.function.php">
    <!-- Formulaire HTML qui envoie une requête GET à la page "api.function.php" -->
    <label for="table">Table :</label>
    <!-- Champ de saisie pour entrer le nom de la table -->
    <input id="table" type="text" name="table"><br>
    <!-- Bouton pour soumettre le formulaire -->
    <input type="submit" value="Envoyer">
</form>

<?php
    // Fonction pour générer une requête SQL.
    function genRequete($table, $champs = "*", $filtre = "") {
        // Commence par une requête SELECT avec les champs spécifiés (par défaut tous les champs).
        $req = "SELECT " . $champs . " FROM " . $table;
        // Si un filtre est spécifié, ajoute une clause WHERE à la requête.
        if ($filtre !== "") {
            $req .= " WHERE " . $filtre;
        }
        // Termine la requête avec un point-virgule.
        $req .= ";";
        // Retourne la requête complète.
        return $req;
    }

    // Inclusion du fichier "test_1.php" qui contient probablement la connexion à la base de données.
    require_once("test_1.php");

    // Prépare une requête en utilisant la fonction genRequete pour sélectionner toutes les colonnes de la table spécifiée dans le formulaire.
    $req = $mysqli->prepare(genRequete($_GET["table"]));
    // Exécute la requête préparée.
    $req->execute();
    // Récupère le résultat de la requête.
    $curs = $req->get_result();

    // Parcourt les résultats de la requête.
    while($tuple = $curs->fetch_object()) {
        // Le traitement des résultats devrait être ici, mais il est actuellement vide.
    }
?>

<?php
    //$req=genRequete("utilisateurs", "id, prenom, nom","prenom LIKE 'Je%'");
    //$curs=$mysqli->query($req);
    //while($tuple=$curs->fetch_object()) {
        //$req=$mysqli->prepare("SELECT * FROM utilisateurs WHERE id=?, prenom=?, nom=? LIKE 'Je%'");
//}

//$req->bind_param("iss", $_GET["id"], $_GET["prenom"], $_GET["nom"]);
?>