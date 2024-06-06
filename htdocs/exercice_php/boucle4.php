<!DOCTYPE html>
<html>

<head>
    <title>Tableau</title>
</head>

<style>
    td {
        width: 50px;
    }
    .color {
        background-color: red;
    }
</style>

<body>
    <table border="1">
        <tr>
            <?php
            $case= 1;
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr></tr>";
                for ($j = 1; $j <= 5; $j++) {
                echo "<td class=color;>".$case++;
                echo "</td>";
                }
            }
            if ($case >= 50) {
                echo "";
            }
            $num1 = rand(1, 10);
            $num2 = rand(11, 30);
            for ($num1 = 1; $num1 <= 10; $num1++) {
            for ($num2 = 1; $num2 <= 10; $num2++) {
                }
            }
            if ($num1 >= 50) {
                echo "";
            }
            ?>
        </tr>
    </table>
</body>

</html>