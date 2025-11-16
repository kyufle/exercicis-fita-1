<!-- primero hay que declarar la variable n -->
<!-- como es una secuencia de números seguramente haya que hacer un bucle for -->
<!-- y dentro del bucle imprimir la filera -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1 - taules</title>
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
    echo "<table>";
    echo "<tr>";
    for ($i = 0; $i < $n; $i++) {
        echo "<td>".$i."</td>";
    }
    echo "<tr>";
    echo "</table>";
?>
</body>
</html>
