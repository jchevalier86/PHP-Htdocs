<?php
    for($i=0; $i<=10; $i++) {
        echo $i."<br>";
    }
?>

<?php
    while($i<=5) {
        echo $i++;
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tableau de Carrés</title>
</head>

<style>
    td {
        width: 50px;
    }
</style>

<body>
    <table border="1">
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr></tr>";
                for ($j = 1; $j <=10; $j++) {
                echo "<td>".$i*$j;
                echo "</td>";
                }
            }
            ?>
        </tr>
    </table>
</body>

</html>
        