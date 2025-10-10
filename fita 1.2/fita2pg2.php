<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>
<body>
<form action="fita2pg3.php" method="get">
    <select name="eleccion">
        <?php
        $primer = $_POST["primer"];
        $segon = $_POST["segon"];
        $tercer = $_POST["tercer"];
        $quart = $_POST["quart"];
        $cinque = $_POST["cinque"];

        echo "<option value=\"$primer\">$primer</option>";
        echo "<option value=\"$segon\">$segon</option>";
        echo "<option value=\"$tercer\">$tercer</option>";
        echo "<option value=\"$quart\">$quart</option>";
        echo "<option value=\"$cinque\">$cinque</option>";
        ?>
    </select>
    <input type="submit" value="Tramet consulta">
</form>
</body>
</html>
