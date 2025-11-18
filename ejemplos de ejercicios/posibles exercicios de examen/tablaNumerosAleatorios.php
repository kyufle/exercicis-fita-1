<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Números Aleatorios</title>
    <style>
        table { border-collapse: collapse; margin: 20px auto; }
        td, th { border: 1px solid black; padding: 8px 12px; text-align: center; }
        td span { display: inline-block; margin: 2px; }
    </style>
</head>
<body>

<?php
$rows = 4;
$cols = 6;
?>

<table>
<?php
for ($r = 1; $r <= $rows; $r++) {
    echo "<tr>";
    for ($c = 1; $c <= $cols; $c++) {
        echo "<td>";
        for ($k = 1; $k <= $c; $k++) {
            echo "<span>" . rand(1,50) . "</span>";
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
