<form action="demo.php">
    <input type="submit" >
</form>
<table border="1">
    <tr>
        <?php 
            $number1=rand(1,49);
            $number2=rand(1,49);
            $number3=rand(1,49);
            $number4=rand(1,49);
            $number5=rand(1,49);



            $min=1;
            $max=49;



            $case =1;
                for($i = 0 ; $i <= 9; $i++){

                    echo"<tr>";
                    for($j = 0 ; $j <= 4; $j++){

                        if($case!==50){
                            if($number1===$case  $number2===$case  $number3===$case  $number4===$case  $number5===$case ) {

                                echo "<td bgcolor=red>".$case;
                            } 
                            else{
                                 echo "<td>".$case ;
                            }

                        }
                        else{
                            echo " ";
                        } 
                        $case++;
                    }
                }
                    echo"<tr/>"
        ?>
    </tr>
</table>