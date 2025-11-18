<?php
if (isset($_GET['input']) && is_numeric($_GET['input'])) {

    $cantidad_inputs = (int)$_GET['input'];
} else {
    $cantidad_inputs = 1; 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Dinámico</title>
</head>
<body>
    <h1>Generando <?php echo $cantidad_inputs; ?> Campos de Entrada</h1>
    
    <form action="page3.php" method="post"> 
        
        <?php 
        for ($i = 1; $i <= $cantidad_inputs; $i++) {
            echo '<label for="campo_' . $i . '">Valor ' . $i . ': </label>';
            echo '<input type="text" name="campo_' . $i . '" id="campo_' . $i . '"><br><br>'; 
        }
        ?>
        
        <button type="submit">Enviar datos</button> 
    </form>
</body>
</html>