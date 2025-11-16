<!-- primero se tienen que declarar las variables de n y m -->
<!-- se tiene que tienen que hacer dos fors anidados -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3</title>
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
        $n = 10;
        $m = 10;

        echo "<table>";
        
        for ($i = 0; $i <= $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $m; $j++) {
                echo "<td>".($j+$i)."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>