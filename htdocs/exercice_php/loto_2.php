
<html>
<table border='1'>
    

<?php
$case=1;
    $grille=[];
    
    for ($i=1;$i<=5;$i++){
        $num=rand(1,49);
        while (array_search($num, $grille)!==false){
            $num=rand(1,49);
        }
        array_push($grille,$num);

    }
    

    for($j = 1;$case <49;$j++){

      for($i = 1;$i <=5;$i++){
            if($case===50){
                echo "<td width='10' height='10'></td>"; 
                }
            elseif(array_search($case,$grille)===false){
                echo "<td width='10' height='10'>$case</td>"; 
            }
            else{
                echo "<td width='10' height='10' bgcolor='red'>$case</td>"; 
            }
            
        
            $case++;   
        }
        echo "<tr width='10' height='10'></tr>"; 
        
    }
?>
</html>