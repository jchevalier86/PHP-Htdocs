<?php
    //Auth
    $url = "http://localhost/api.php?login=jdupont&password=123456";
    $me=json_decode(file_get_contents($url));
    echo "<pre>".var_export($me,true)."</pre>";
    $url = "http://localhost/api.php?token=".$me->token."&verb=select&table=utilisateurs&fields=id,prenom,nom&filter=prenom%20LIKE%20%27Thom%%27";
    //$url = "http://localhost/testgen.php?table=utilisateurs&filtre=prenom%20LIKE%20%27Je%%27"; 
    //%20->Espace %27->'
    $users = json_decode(file_get_contents($url));
    echo "<pre>".var_export($users,true)."</pre>";
    //foreach($users as $unUser) {
        //for ($i = 0, $i >= $unUser, $i++) {
            //echo $unUser;
        //}
    //}
?>