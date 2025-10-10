<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['eleccion'])) {
        $seleccionado = $_GET['eleccion'];
        echo "Has seleccionado: " . ($seleccionado);
    } else {
        echo "No se ha seleccionado nada.";
    }
    ?>
</body>
</html>
