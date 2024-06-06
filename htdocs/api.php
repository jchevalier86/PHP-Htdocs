<?php
    // Définir l'en-tête du contenu comme JSON avec encodage UTF-8
    header('Content-Type: application/json; charset=utf-8');

    // Inclure le fichier "api-func.php" qui contient probablement des fonctions nécessaires.
    require_once("api-func.php");

    // Vérifie si un token est présent dans la requête GET.
    if(isset($_GET["token"])) {
        // Authentifie l'utilisateur avec le token fourni.
        $user = token_log($_GET["token"]);
        
        // Si l'utilisateur est authentifié.
        if($user !== null) {
            // Vérifie si le verbe (action) est spécifié.
            if(isset($_GET["verb"])) {
                $verb = $_GET["verb"];
                switch ($verb) {
                    // Cas où l'action est 'select'
                    case 'select' :
                        $result = [];

                        // Vérifie si le nom de la table est spécifié.
                        if(isset($_GET["table"])) {
                            // Construire la requête SQL SELECT avec les champs et filtres optionnels.
                            $fields = isset($_GET["fields"]) ? $_GET["fields"] : "*";
                            $filter = isset($_GET["filter"]) ? " WHERE ".$_GET["filter"] : "";
                            $req = "SELECT ".$fields." FROM ".$_GET["table"].$filter.";";

                            try {
                                $data = [];
                                // Préparer et exécuter la requête SQL.
                                $req = $mysqli->prepare($req);
                                $req->execute();
                                $curs = $req->get_result();

                                // Si des résultats sont retournés, les ajouter au tableau de données.
                                if($curs->num_rows > 0) {
                                    while($tuple = $curs->fetch_object()) {
                                        array_push($data, $tuple);
                                    }
                                }

                                // Retourner le succès et les données.
                                $result["result"] = "Success";
                                $result["data"] = $data;
                            }
                            catch (Exception $e) {
                                // En cas d'erreur, retourner l'erreur.
                                $result["result"] = "Error";
                                $result["data"] = $e->getMessage();
                            }
                        } else {
                            // Si la table n'est pas spécifiée, retourner une erreur.
                            $result["result"] = "Error";
                            $result["data"] = "Table non spécifiée";
                        }
                        echo json_encode($result);
                        break;

                    // Cas où l'action est 'insert'
                    case 'insert' :
                        $result = [];

                        // Vérifie si le nom de la table est spécifié.
                        if(isset($_GET["table"])) {
                            // Construire la requête SQL INSERT avec les champs et données.
                            $fieldset = isset($_GET["fieldset"]) ? $_GET["fieldset"]." " : " ";
                            $donnees = $_GET["donnees"];
                            $req = "INSERT INTO ".$_GET["table"]." ".$fieldset." VALUES ".$donnees.";";

                            // Exécution de la requête (non finalisée dans le code fourni).
                            // Préparation et exécution de la requête sont nécessaires ici.
                            // Ajouter le résultat de l'opération dans $result["data"] après l'exécution.

                        } else {
                            // Si la table n'est pas spécifiée, retourner une erreur.
                            $result["result"] = "Error";
                            $result["data"] = "Table non spécifiée";
                        }
                        echo json_encode($result);
                        break;

                    // Cas où l'action est 'update' (non implémenté)
                    case 'update' :
                        // Code pour mettre à jour des enregistrements dans la base de données.
                        break;

                    // Cas où l'action est 'delete' (non implémenté)
                    case 'delete' :
                        // Code pour supprimer des enregistrements de la base de données.
                        break;
                }
            }
        }
    } else {
        // Si aucun token n'est fourni, tenter d'authentifier l'utilisateur avec login et mot de passe.
        echo json_encode(auth($_GET["login"], $_GET["password"]));
    }
?>