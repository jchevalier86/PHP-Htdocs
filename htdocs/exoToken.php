<?php
    //echo $_POST["login"]. "<br>" .$_POST["password"];
    header("Content-Type: application/json; charset=utf-8");
    $reponse = [];
    function genToken(){
        if(function_exists("com_create_guid")===true){
            return trim(com_create_guid(),"{}");
        }
        else {
            return sprintf("%04X%04X-%04X-%04X-%04X-%04X%04X%04X",
            mt_rand(0,65535),
            mt_rand(0,65535),
            mt_rand(0,65535),
            mt_rand(16394,20479),
            mt_rand(32768,49151),
            mt_rand(0,65535),
            mt_rand(0,65535),
            mt_rand(0,65535));
        }
    }

    function getExpire ($date, $days = 8) {
        return date('Y-m-d', strtotime($date. ' + '.$days.'  days'));
    }
    require_once("test_1.php");
    if(isset($_POST["token"])) {
        $req=$mysqli->prepare("SELECT * FROM utilisateurs WHERE token=?");
        $req->bind_param("s", $_POST["token"]);
        $req->execute();
        $curs=$req->get_result();
        if($curs->num_rows > 0) {
            $user=$curs->fetch_object();
            //$user->token=genToken();
            if($user->expire<date("Y-m-d")) {
                $reponse["status"]="NO";
                $reponse["data"]="Token expiré";
                echo json_encode($reponse);
            }
            else {
            $user->expire=getExpire(date('Y-m-d'));
            $reponse["status"]="OK";
            $reponse["data"]=$user;
            echo json_encode($reponse);
            $req=$mysqli->prepare("UPDATE utilisateurs SET token=?, expire=? WHERE id=?;");
            $req->bind_param('ssi', $user->token, $user->expire, $user->id);
            $req->execute();
            }
        }
        else {
            $reponse["status"]="NO";
            $reponse["data"]="Token invalide";
            echo json_encode($reponse);
        }
    }
    else {
        $req=$mysqli->prepare("SELECT * FROM utilisateurs WHERE login=? AND password=?");
        $req->bind_param("ss", $_POST["login"], $_POST["password"]);
        $req->execute();
        $curs=$req->get_result();
        if($curs->num_rows > 0) {
            $user=$curs->fetch_object();
            $user->token=genToken();
            $user->expire=getExpire(date('Y-m-d'));
            $reponse["status"]="OK";
            $reponse["data"]=$user;
            echo json_encode($reponse);
            $req=$mysqli->prepare("UPDATE utilisateurs SET token=?, expire=? WHERE id=?;");
            $req->bind_param('ssi', $user->token, $user->expire, $user->id);
            $req->execute();
        }
        else {
            $reponse["status"]="NO";
            $reponse["data"]="Nom d'utilisateur ou mot de passe incorrect";
            echo json_encode($reponse);
        }
    }
    //echo "<pre>".var_export($user, true)."</pre>";
?>