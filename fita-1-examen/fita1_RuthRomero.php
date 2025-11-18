<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen fita 1</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
        }

        table{
            border-collapse: collapse;
        }

        td, th {
            padding: 5px;
            text-align: center;
        }

        thead th {
            background-color: #ADD8E6;
            color: #000000;
        }
    </style>
</head>
<body>
    <?php 
        $n = 10;
        $m = 20;

        echo "<table>";
        echo "<thead><tr>";
        for ($j = 1; $j <= $m; $j++) {
            echo "<th>" . chr($j + 96) . "</th>";
        }
        echo "</tr></thead>";
        echo "<tbody>";
        for ($i = 0; $i < $n; $i++) { 
            echo "<tr>";
            
            for ($j = 1; $j <= $m; $j++) {
                echo "<td>".($j+$i)."</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        
        echo "</table>";
    ?>
</body>
</html>