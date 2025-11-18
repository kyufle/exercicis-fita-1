<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla Decreciente</title>
    <style>
        table { border-collapse: collapse; margin: 20px auto; }
        td, th { border: 1px solid black; padding: 8px 12px; text-align: center; }
        td span { display: inline-block; margin: 2px; }
    </style>
</head>
<body>

<?php
$rows = 6;
$cols = 5;
?>

<table>
<?php
for ($r = 0; $r < $rows; $r++) {
    echo "<tr>";
    for ($c = 0; $c < $cols; $c++) {
        echo "<td>";
        for ($k = $c; $k >= 0; $k--) {
            echo "<span>$k</span>";
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
