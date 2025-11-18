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
        td.normal, th {
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

        .normal span {
            display: table-cell;
            border: 1px solid #000;
            padding: 5px 10px;
            margin: 0;
            text-align: center;
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
        echo "<td class='normal'>";
        for ($k = 0; $k <= $col; $k++) {
            echo "<span>" . ($k + $row) . "</span> ";
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>


</body>
</html>
