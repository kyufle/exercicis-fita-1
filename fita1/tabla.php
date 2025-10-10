<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Tabla con Series Incrementales</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 40px auto;
        }
        td, th {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<?php
$M = 7;
$N = 6;
?>

<table>


<?php
for ($row = 0; $row < $N; $row++) {
    echo "<tr>";

    for ($col = 0; $col <= $M; $col++) {
        echo "<td>";
        for ($k = 0; $k <= $col; $k++) {
            echo $k + $row;
            if ($k < $col) echo ",";
        }
        echo "</td>";
    }

    echo "</tr>";
}
?>
</table>

</body>
</html>
