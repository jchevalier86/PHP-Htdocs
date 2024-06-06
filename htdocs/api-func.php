<?php
    // Inclusion du fichier "test_1.php" qui contient la connexion à la base de données.
    require_once("test_1.php");

    // Fonction pour générer un token unique.
    function genToken(){
        // Vérifie si la fonction 'com_create_guid' existe.
        if(function_exists('com_create_guid') === true){
            // Si oui, utilise cette fonction pour créer un GUID et enlève les accolades.
            return trim(com_create_guid(),"{}");
        } else {
            // Sinon, génère un GUID de manière manuelle en utilisant des valeurs aléatoires.
            return sprintf("%04X%04X-%04X-%04X-%04X-%04X%04X%04X",
                mt_rand(0,65535), mt_rand(0,65535), mt_rand(0,65535), 
                mt_rand(16394,20479), mt_rand(32768,49151), 
                mt_rand(0,65535), mt_rand(0,65535), mt_rand(0,65535));
        }
    }

    // Fonction d'authentification d'un utilisateur avec son login et son mot de passe.
    function auth($log, $pass){
        global $mysqli; // Utilise l'objet de connexion MySQLi global.
        
        // Prépare une requête SQL pour sélectionner l'utilisateur correspondant.
        $req = $mysqli->prepare("SELECT id, token, expire FROM utilisateurs WHERE login=? AND password=?");
        // Lie les paramètres de login et mot de passe à la requête préparée.
        $req->bind_param('ss', $log, $pass);
        // Exécute la requête.
        $req->execute();
        // Récupère le résultat de la requête.
        $curs = $req->get_result();
        
        // Si au moins une ligne est retournée (l'utilisateur existe).
        if($curs->num_rows > 0){
            // Récupère l'utilisateur sous forme d'objet.
            $user = $curs->fetch_object();
            // Met à jour la date d'expiration en ajoutant 8 jours.
            $new_exp = date($user->expire);
            $new_exp = date('Y-m-d', strtotime($new_exp . ' + 8 days'));
            
            // Prépare une requête pour mettre à jour le token et la date d'expiration de l'utilisateur.
            $upd = $mysqli->prepare("UPDATE utilisateurs SET expire = ?, token = ? WHERE id = ?;");
            // Génère un nouveau token.
            $token = genToken();
            // Lie les paramètres (nouvelle date d'expiration, nouveau token et ID utilisateur) à la requête préparée.
            $upd->bind_param('sss', $new_exp, $token, $user->id);
            // Exécute la requête de mise à jour.
            $upd->execute();
            
            // Si au moins une ligne a été affectée par la mise à jour.
            if($mysqli->affected_rows > 0){
                // Met à jour les propriétés de l'utilisateur avec le nouveau token et la nouvelle date d'expiration.
                $user->token = $token;
                $user->expire = $new_exp;
            }
            // Retourne l'utilisateur avec les nouvelles informations.
            return $user;
        } else {
            // Si l'utilisateur n'existe pas, retourne null.
            return null;
        }
    }

    // Fonction pour authentifier un utilisateur via son token.
    function token_log($token) {
        global $mysqli; // Utilise l'objet de connexion MySQLi global.
        
        // Prépare une requête SQL pour sélectionner l'utilisateur correspondant au token.
        $req = $mysqli->prepare("SELECT id, token, expire FROM utilisateurs WHERE token = ?");
        // Lie le paramètre token à la requête préparée.
        $req->bind_param('s', $token);
        // Exécute la requête.
        $req->execute();
        // Récupère le résultat de la requête.
        $curs = $req->get_result();
        
        // Si au moins une ligne est retournée (l'utilisateur existe).
        if($curs->num_rows > 0){
            // Récupère l'utilisateur sous forme d'objet.
            $user = $curs->fetch_object();
            // Met à jour la date d'expiration en ajoutant 8 jours.
            $new_exp = date($user->expire);
            $new_exp = date('Y-m-d', strtotime($new_exp . ' + 8 days'));
            
            // Prépare une requête pour mettre à jour la date d'expiration de l'utilisateur.
            $upd = $mysqli->prepare("UPDATE utilisateurs SET expire = ? WHERE id = ?;");
            // Lie les paramètres (nouvelle date d'expiration et ID utilisateur) à la requête préparée.
            $upd->bind_param('ss', $new_exp, $user->id);
            // Exécute la requête de mise à jour.
            $upd->execute();
            
            // Si au moins une ligne a été affectée par la mise à jour.
            if($mysqli->affected_rows > 0){
                // Met à jour la propriété 'expire' de l'utilisateur avec la nouvelle date.
                $user->expire = $new_exp;
            }
            // Retourne l'utilisateur avec les nouvelles informations.
            return $user;
        } else {
            // Si l'utilisateur n'existe pas, retourne null.
            return null;
        }
    }
?>
