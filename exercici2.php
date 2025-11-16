<!-- primero se tendrá que declarar las variables, las letras y los números -->
<!-- después se tendrá que hacer un bucle, fuera de este se creará los diferentes tds -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
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
        $arrayLetras = array("A","B","C","D","E");
        $n = 5;
        echo "<table>";
        echo "<tr>";
        for ($i = 0; $i < $n; $i++) {
            echo "<td>".$arrayLetras[$i]."</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($j = 0; $j < $n; $j++) {
            echo "<td>".$j."</td>";
        }
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>