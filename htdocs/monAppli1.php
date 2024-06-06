<?php
	//Auth
	$url = "http://localhost/ex/api.php?login=tgirardeau&pass=123456";
	$me=json_decode(file_get_contents($url));
	//echo "<pre>".var_export($me,true)."</pre>";
	$url = "http://localhost/ex/api.php?token=".$me->token."&verb=select&table=utilisateurs&fields=id,prenom,nom&filter=prenom%20LIKE%20%27Thom%%27";
	$users = json_decode(file_get_contents($url));
	echo "<pre>".var_export($users,true)."</pre>";
	//foreach($users as $unUser){
		
	//}
?>