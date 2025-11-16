<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4</title>
    <style>
        table, tr, td{
            border: 1px solid black;
        }

        table{
            border-collapse: collapse;
        }

        td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php

        $n = 5;
        $m = 5;
        $arrayLetras = array("A","B","C","D","E");
        echo "<table>";
        for ($i = 0; $i < $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $m; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<td></td>";
                }
                else if ($i == 0 && $j <= $n){
                    echo "<td>".($j)."</td>";
                }
                else if ($i != 0 && $j == 0) {
                    echo "<td>".$arrayLetras[$i-1]."</td>";
                } else{
                    echo "<td></td>";
                }
                
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>