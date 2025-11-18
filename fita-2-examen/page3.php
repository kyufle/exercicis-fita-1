<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Recibidos (page3)</title>
    <style>
        .dato-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .dato-item label {
            margin-left: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    if (!empty($_POST)) {
        foreach ($_POST as $nombre_campo => $valor_campo) {
            if (strpos($nombre_campo, 'campo_') === 0) {
                
                echo '<div class="dato-item">';
                echo '<input type="checkbox" name="seleccion[]" id="' . $nombre_campo . '" value="' . htmlspecialchars($valor_campo) . '">';
                echo '<label for="' . $nombre_campo . '">';
                echo $valor_campo;
                echo '</label>';
                echo '</div>';
            }
        }
    } else {
        echo '<p>No se han recibido datos del formulario.</p>';
    }
    ?>

</body>
</html>